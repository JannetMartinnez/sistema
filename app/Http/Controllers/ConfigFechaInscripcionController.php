<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConfigFechaInscripcionRequest;
use App\Http\Requests\UpdateConfigFechaInscripcionRequest;
use App\Repositories\ConfigFechaInscripcionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConfigFechaInscripcionController extends AppBaseController
{
    /** @var  ConfigFechaInscripcionRepository */
    private $configFechaInscripcionRepository;

    public function __construct(ConfigFechaInscripcionRepository $configFechaInscripcionRepo)
    {
        $this->configFechaInscripcionRepository = $configFechaInscripcionRepo;
    }

    /**
     * Display a listing of the ConfigFechaInscripcion.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->configFechaInscripcionRepository->pushCriteria(new RequestCriteria($request));
        $configFechaInscripcions = $this->configFechaInscripcionRepository->all();

        return view('config_fecha_inscripcions.index')
            ->with('configFechaInscripcions', $configFechaInscripcions);
    }

    /**
     * Show the form for creating a new ConfigFechaInscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('config_fecha_inscripcions.create');
    }

    /**
     * Store a newly created ConfigFechaInscripcion in storage.
     *
     * @param CreateConfigFechaInscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateConfigFechaInscripcionRequest $request)
    {
        $input = $request->all();

        $configFechaInscripcion = $this->configFechaInscripcionRepository->create($input);

        Flash::success('Config Fecha Inscripcion saved successfully.');

        return redirect(route('configFechaInscripcions.index'));
    }

    /**
     * Display the specified ConfigFechaInscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $configFechaInscripcion = $this->configFechaInscripcionRepository->findWithoutFail($id);

        if (empty($configFechaInscripcion)) {
            Flash::error('Config Fecha Inscripcion not found');

            return redirect(route('configFechaInscripcions.index'));
        }

        return view('config_fecha_inscripcions.show')->with('configFechaInscripcion', $configFechaInscripcion);
    }

    /**
     * Show the form for editing the specified ConfigFechaInscripcion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $configFechaInscripcion = $this->configFechaInscripcionRepository->findWithoutFail($id);

        if (empty($configFechaInscripcion)) {
            Flash::error('Config Fecha Inscripcion not found');

            return redirect(route('configFechaInscripcions.index'));
        }

        return view('config_fecha_inscripcions.edit')->with('configFechaInscripcion', $configFechaInscripcion);
    }

    /**
     * Update the specified ConfigFechaInscripcion in storage.
     *
     * @param  int              $id
     * @param UpdateConfigFechaInscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConfigFechaInscripcionRequest $request)
    {
        $configFechaInscripcion = $this->configFechaInscripcionRepository->findWithoutFail($id);

        if (empty($configFechaInscripcion)) {
            Flash::error('Config Fecha Inscripcion not found');

            return redirect(route('configFechaInscripcions.index'));
        }

        $configFechaInscripcion = $this->configFechaInscripcionRepository->update($request->all(), $id);

        Flash::success('Config Fecha Inscripcion updated successfully.');

        return redirect(route('configFechaInscripcions.index'));
    }

    /**
     * Remove the specified ConfigFechaInscripcion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $configFechaInscripcion = $this->configFechaInscripcionRepository->findWithoutFail($id);

        if (empty($configFechaInscripcion)) {
            Flash::error('Config Fecha Inscripcion not found');

            return redirect(route('configFechaInscripcions.index'));
        }

        $this->configFechaInscripcionRepository->delete($id);

        Flash::success('Config Fecha Inscripcion deleted successfully.');

        return redirect(route('configFechaInscripcions.index'));
    }
}
