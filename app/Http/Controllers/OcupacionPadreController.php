<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOcupacionPadreRequest;
use App\Http\Requests\UpdateOcupacionPadreRequest;
use App\Repositories\OcupacionPadreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OcupacionPadreController extends AppBaseController
{
    /** @var  OcupacionPadreRepository */
    private $ocupacionPadreRepository;

    public function __construct(OcupacionPadreRepository $ocupacionPadreRepo)
    {
        $this->ocupacionPadreRepository = $ocupacionPadreRepo;
    }

    /**
     * Display a listing of the OcupacionPadre.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ocupacionPadreRepository->pushCriteria(new RequestCriteria($request));
        $ocupacionPadres = $this->ocupacionPadreRepository->all();

        return view('ocupacion_padres.index')
            ->with('ocupacionPadres', $ocupacionPadres);
    }

    /**
     * Show the form for creating a new OcupacionPadre.
     *
     * @return Response
     */
    public function create()
    {
        return view('ocupacion_padres.create');
    }

    /**
     * Store a newly created OcupacionPadre in storage.
     *
     * @param CreateOcupacionPadreRequest $request
     *
     * @return Response
     */
    public function store(CreateOcupacionPadreRequest $request)
    {
        $input = $request->all();

        $ocupacionPadre = $this->ocupacionPadreRepository->create($input);

        Flash::success('Ocupacion Padre saved successfully.');

        return redirect(route('ocupacionPadres.index'));
    }

    /**
     * Display the specified OcupacionPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ocupacionPadre = $this->ocupacionPadreRepository->findWithoutFail($id);

        if (empty($ocupacionPadre)) {
            Flash::error('Ocupacion Padre not found');

            return redirect(route('ocupacionPadres.index'));
        }

        return view('ocupacion_padres.show')->with('ocupacionPadre', $ocupacionPadre);
    }

    /**
     * Show the form for editing the specified OcupacionPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ocupacionPadre = $this->ocupacionPadreRepository->findWithoutFail($id);

        if (empty($ocupacionPadre)) {
            Flash::error('Ocupacion Padre not found');

            return redirect(route('ocupacionPadres.index'));
        }

        return view('ocupacion_padres.edit')->with('ocupacionPadre', $ocupacionPadre);
    }

    /**
     * Update the specified OcupacionPadre in storage.
     *
     * @param  int              $id
     * @param UpdateOcupacionPadreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOcupacionPadreRequest $request)
    {
        $ocupacionPadre = $this->ocupacionPadreRepository->findWithoutFail($id);

        if (empty($ocupacionPadre)) {
            Flash::error('Ocupacion Padre not found');

            return redirect(route('ocupacionPadres.index'));
        }

        $ocupacionPadre = $this->ocupacionPadreRepository->update($request->all(), $id);

        Flash::success('Ocupacion Padre updated successfully.');

        return redirect(route('ocupacionPadres.index'));
    }

    /**
     * Remove the specified OcupacionPadre from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ocupacionPadre = $this->ocupacionPadreRepository->findWithoutFail($id);

        if (empty($ocupacionPadre)) {
            Flash::error('Ocupacion Padre not found');

            return redirect(route('ocupacionPadres.index'));
        }

        $this->ocupacionPadreRepository->delete($id);

        Flash::success('Ocupacion Padre deleted successfully.');

        return redirect(route('ocupacionPadres.index'));
    }
}
