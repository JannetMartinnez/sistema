<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePreparatoriaProcedenciaRequest;
use App\Http\Requests\UpdatePreparatoriaProcedenciaRequest;
use App\Repositories\PreparatoriaProcedenciaRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\PreparatoriaProcedencia;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PreparatoriaProcedenciaController extends AppBaseController
{
    /** @var  PreparatoriaProcedenciaRepository */
    private $preparatoriaProcedenciaRepository;

    public function __construct(PreparatoriaProcedenciaRepository $preparatoriaProcedenciaRepo)
    {
        $this->preparatoriaProcedenciaRepository = $preparatoriaProcedenciaRepo;
    }

    /**
     * Display a listing of the PreparatoriaProcedencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->preparatoriaProcedenciaRepository->pushCriteria(new RequestCriteria($request));
        $preparatoriaProcedencias = $this->preparatoriaProcedenciaRepository->all();

        return view('preparatoria_procedencias.index')
            ->with('preparatoriaProcedencias', $preparatoriaProcedencias);
    }

    /**
     * Show the form for creating a new PreparatoriaProcedencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('preparatoria_procedencias.create');
    }

    /**
     * Store a newly created PreparatoriaProcedencia in storage.
     *
     * @param CreatePreparatoriaProcedenciaRequest $request
     *
     * @return Response
     */
    public function store(CreatePreparatoriaProcedenciaRequest $request)
    {
        $input = $request->all();

        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->create($input);

        Flash::success('Preparatoria Procedencia saved successfully.');

        return redirect(route('preparatoriaProcedencias.index'));
    }

    /**
     * Display the specified PreparatoriaProcedencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->findWithoutFail($id);

        if (empty($preparatoriaProcedencia)) {
            Flash::error('Preparatoria Procedencia not found');

            return redirect(route('preparatoriaProcedencias.index'));
        }

        return view('preparatoria_procedencias.show')->with('preparatoriaProcedencia', $preparatoriaProcedencia);
    }

    /**
     * Show the form for editing the specified PreparatoriaProcedencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->findWithoutFail($id);

        if (empty($preparatoriaProcedencia)) {
            Flash::error('Preparatoria Procedencia not found');

            return redirect(route('preparatoriaProcedencias.index'));
        }

        return view('preparatoria_procedencias.edit')->with('preparatoriaProcedencia', $preparatoriaProcedencia);
    }

    /**
     * Update the specified PreparatoriaProcedencia in storage.
     *
     * @param  int              $id
     * @param UpdatePreparatoriaProcedenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePreparatoriaProcedenciaRequest $request)
    {
        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->findWithoutFail($id);

        if (empty($preparatoriaProcedencia)) {
            Flash::error('Preparatoria Procedencia not found');

            return redirect(route('preparatoriaProcedencias.index'));
        }

        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->update($request->all(), $id);

        Flash::success('Preparatoria Procedencia updated successfully.');

        return redirect(route('preparatoriaProcedencias.index'));
    }

    /**
     * Remove the specified PreparatoriaProcedencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preparatoriaProcedencia = $this->preparatoriaProcedenciaRepository->findWithoutFail($id);

        if (empty($preparatoriaProcedencia)) {
            Flash::error('Preparatoria Procedencia not found');

            return redirect(route('preparatoriaProcedencias.index'));
        }

        $this->preparatoriaProcedenciaRepository->delete($id);

        Flash::success('Preparatoria Procedencia deleted successfully.');

        return redirect(route('preparatoriaProcedencias.index'));
    }
    public function getPreparatoria(Request $request,$id)
    {       
       if($request->ajax()){
           /*$preparatorias=PreparatoriaProcedencia::entidades($id);*/
             $preparatorias=PreparatoriaProcedencia::where('entidades_federativas_id',$id)->get();
           return response()->json($preparatorias);
       }

    }
}
