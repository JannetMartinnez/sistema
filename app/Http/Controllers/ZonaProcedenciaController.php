<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateZonaProcedenciaRequest;
use App\Http\Requests\UpdateZonaProcedenciaRequest;
use App\Repositories\ZonaProcedenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ZonaProcedenciaController extends AppBaseController
{
    /** @var  ZonaProcedenciaRepository */
    private $zonaProcedenciaRepository;

    public function __construct(ZonaProcedenciaRepository $zonaProcedenciaRepo)
    {
        $this->zonaProcedenciaRepository = $zonaProcedenciaRepo;
    }

    /**
     * Display a listing of the ZonaProcedencia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->zonaProcedenciaRepository->pushCriteria(new RequestCriteria($request));
        $zonaProcedencias = $this->zonaProcedenciaRepository->all();

        return view('zona_procedencias.index')
            ->with('zonaProcedencias', $zonaProcedencias);
    }

    /**
     * Show the form for creating a new ZonaProcedencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('zona_procedencias.create');
    }

    /**
     * Store a newly created ZonaProcedencia in storage.
     *
     * @param CreateZonaProcedenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateZonaProcedenciaRequest $request)
    {
        $input = $request->all();

        $zonaProcedencia = $this->zonaProcedenciaRepository->create($input);

        Flash::success('Zona Procedencia saved successfully.');

        return redirect(route('zonaProcedencias.index'));
    }

    /**
     * Display the specified ZonaProcedencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $zonaProcedencia = $this->zonaProcedenciaRepository->findWithoutFail($id);

        if (empty($zonaProcedencia)) {
            Flash::error('Zona Procedencia not found');

            return redirect(route('zonaProcedencias.index'));
        }

        return view('zona_procedencias.show')->with('zonaProcedencia', $zonaProcedencia);
    }

    /**
     * Show the form for editing the specified ZonaProcedencia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $zonaProcedencia = $this->zonaProcedenciaRepository->findWithoutFail($id);

        if (empty($zonaProcedencia)) {
            Flash::error('Zona Procedencia not found');

            return redirect(route('zonaProcedencias.index'));
        }

        return view('zona_procedencias.edit')->with('zonaProcedencia', $zonaProcedencia);
    }

    /**
     * Update the specified ZonaProcedencia in storage.
     *
     * @param  int              $id
     * @param UpdateZonaProcedenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateZonaProcedenciaRequest $request)
    {
        $zonaProcedencia = $this->zonaProcedenciaRepository->findWithoutFail($id);

        if (empty($zonaProcedencia)) {
            Flash::error('Zona Procedencia not found');

            return redirect(route('zonaProcedencias.index'));
        }

        $zonaProcedencia = $this->zonaProcedenciaRepository->update($request->all(), $id);

        Flash::success('Zona Procedencia updated successfully.');

        return redirect(route('zonaProcedencias.index'));
    }

    /**
     * Remove the specified ZonaProcedencia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $zonaProcedencia = $this->zonaProcedenciaRepository->findWithoutFail($id);

        if (empty($zonaProcedencia)) {
            Flash::error('Zona Procedencia not found');

            return redirect(route('zonaProcedencias.index'));
        }

        $this->zonaProcedenciaRepository->delete($id);

        Flash::success('Zona Procedencia deleted successfully.');

        return redirect(route('zonaProcedencias.index'));
    }
}
