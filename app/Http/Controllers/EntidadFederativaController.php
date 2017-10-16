<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntidadFederativaRequest;
use App\Http\Requests\UpdateEntidadFederativaRequest;
use App\Repositories\EntidadFederativaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Municipio;

class EntidadFederativaController extends AppBaseController
{
    /** @var  EntidadFederativaRepository */
    private $entidadFederativaRepository;

    public function __construct(EntidadFederativaRepository $entidadFederativaRepo)
    {
        $this->entidadFederativaRepository = $entidadFederativaRepo;
    }

    /**
     * Display a listing of the EntidadFederativa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->entidadFederativaRepository->pushCriteria(new RequestCriteria($request));
        $entidadFederativas = $this->entidadFederativaRepository->all();

        return view('entidad_federativas.index')
            ->with('entidadFederativas', $entidadFederativas);
    }

    /**
     * Show the form for creating a new EntidadFederativa.
     *
     * @return Response
     */
    public function create()
    {
        return view('entidad_federativas.create');
    }

    /**
     * Store a newly created EntidadFederativa in storage.
     *
     * @param CreateEntidadFederativaRequest $request
     *
     * @return Response
     */
    public function store(CreateEntidadFederativaRequest $request)
    {
        $input = $request->all();

        $entidadFederativa = $this->entidadFederativaRepository->create($input);

        Flash::success('Entidad Federativa saved successfully.');

        return redirect(route('entidadFederativas.index'));
    }

    /**
     * Display the specified EntidadFederativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $entidadFederativa = $this->entidadFederativaRepository->findWithoutFail($id);

        if (empty($entidadFederativa)) {
            Flash::error('Entidad Federativa not found');

            return redirect(route('entidadFederativas.index'));
        }

        return view('entidad_federativas.show')->with('entidadFederativa', $entidadFederativa);
    }

    /**
     * Show the form for editing the specified EntidadFederativa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $entidadFederativa = $this->entidadFederativaRepository->findWithoutFail($id);

        if (empty($entidadFederativa)) {
            Flash::error('Entidad Federativa not found');

            return redirect(route('entidadFederativas.index'));
        }

        return view('entidad_federativas.edit')->with('entidadFederativa', $entidadFederativa);
    }

    /**
     * Update the specified EntidadFederativa in storage.
     *
     * @param  int              $id
     * @param UpdateEntidadFederativaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntidadFederativaRequest $request)
    {
        $entidadFederativa = $this->entidadFederativaRepository->findWithoutFail($id);

        if (empty($entidadFederativa)) {
            Flash::error('Entidad Federativa not found');

            return redirect(route('entidadFederativas.index'));
        }

        $entidadFederativa = $this->entidadFederativaRepository->update($request->all(), $id);

        Flash::success('Entidad Federativa updated successfully.');

        return redirect(route('entidadFederativas.index'));
    }

    /**
     * Remove the specified EntidadFederativa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $entidadFederativa = $this->entidadFederativaRepository->findWithoutFail($id);

        if (empty($entidadFederativa)) {
            Flash::error('Entidad Federativa not found');

            return redirect(route('entidadFederativas.index'));
        }

        $this->entidadFederativaRepository->delete($id);

        Flash::success('Entidad Federativa deleted successfully.');

        return redirect(route('entidadFederativas.index'));
    }

    public function getMunicipios(Request $request,$id)
    {
       if($request->ajax()){
           $municipios=Municipio::municipios($id);
           return response()->json($municipios);
       }
    }

}
