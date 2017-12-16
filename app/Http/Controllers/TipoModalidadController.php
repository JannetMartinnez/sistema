<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoModalidadRequest;
use App\Http\Requests\UpdateTipoModalidadRequest;
use App\Repositories\TipoModalidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TipoModalidadController extends AppBaseController
{
    /** @var  TipoModalidadRepository */
    private $tipoModalidadRepository;

    public function __construct(TipoModalidadRepository $tipoModalidadRepo)
    {
        $this->tipoModalidadRepository = $tipoModalidadRepo;
    }

    /**
     * Display a listing of the TipoModalidad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoModalidadRepository->pushCriteria(new RequestCriteria($request));
        $tipoModalidads = $this->tipoModalidadRepository->all();

        return view('tipo_modalidads.index')
            ->with('tipoModalidads', $tipoModalidads);
    }

    /**
     * Show the form for creating a new TipoModalidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_modalidads.create');
    }

    /**
     * Store a newly created TipoModalidad in storage.
     *
     * @param CreateTipoModalidadRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoModalidadRequest $request)
    {
        $input = $request->all();

        $tipoModalidad = $this->tipoModalidadRepository->create($input);

        Flash::success('Tipo Modalidad saved successfully.');

        return redirect(route('tipoModalidads.index'));
    }

    /**
     * Display the specified TipoModalidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoModalidad = $this->tipoModalidadRepository->findWithoutFail($id);

        if (empty($tipoModalidad)) {
            Flash::error('Tipo Modalidad not found');

            return redirect(route('tipoModalidads.index'));
        }

        return view('tipo_modalidads.show')->with('tipoModalidad', $tipoModalidad);
    }

    /**
     * Show the form for editing the specified TipoModalidad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoModalidad = $this->tipoModalidadRepository->findWithoutFail($id);

        if (empty($tipoModalidad)) {
            Flash::error('Tipo Modalidad not found');

            return redirect(route('tipoModalidads.index'));
        }

        return view('tipo_modalidads.edit')->with('tipoModalidad', $tipoModalidad);
    }

    /**
     * Update the specified TipoModalidad in storage.
     *
     * @param  int              $id
     * @param UpdateTipoModalidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoModalidadRequest $request)
    {
        $tipoModalidad = $this->tipoModalidadRepository->findWithoutFail($id);

        if (empty($tipoModalidad)) {
            Flash::error('Tipo Modalidad not found');

            return redirect(route('tipoModalidads.index'));
        }

        $tipoModalidad = $this->tipoModalidadRepository->update($request->all(), $id);

        Flash::success('Tipo Modalidad updated successfully.');

        return redirect(route('tipoModalidads.index'));
    }

    /**
     * Remove the specified TipoModalidad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoModalidad = $this->tipoModalidadRepository->findWithoutFail($id);

        if (empty($tipoModalidad)) {
            Flash::error('Tipo Modalidad not found');

            return redirect(route('tipoModalidads.index'));
        }

        $this->tipoModalidadRepository->delete($id);

        Flash::success('Tipo Modalidad deleted successfully.');

        return redirect(route('tipoModalidads.index'));
    }
}
