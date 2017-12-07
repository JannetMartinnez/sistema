<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadoCivilRequest;
use App\Http\Requests\UpdateEstadoCivilRequest;
use App\Repositories\EstadoCivilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadoCivilController extends AppBaseController
{
    /** @var  EstadoCivilRepository */
    private $estadoCivilRepository;

    public function __construct(EstadoCivilRepository $estadoCivilRepo)
    {
        $this->estadoCivilRepository = $estadoCivilRepo;
    }

    /**
     * Display a listing of the EstadoCivil.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadoCivilRepository->pushCriteria(new RequestCriteria($request));
        $estadoCivils = $this->estadoCivilRepository->all();

        return view('estado_civils.index')
            ->with('estadoCivils', $estadoCivils);
    }

    /**
     * Show the form for creating a new EstadoCivil.
     *
     * @return Response
     */
    public function create()
    {
        return view('estado_civils.create');
    }

    /**
     * Store a newly created EstadoCivil in storage.
     *
     * @param CreateEstadoCivilRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadoCivilRequest $request)
    {
        $input = $request->all();

        $estadoCivil = $this->estadoCivilRepository->create($input);

        Flash::success('Estado Civil saved successfully.');

        return redirect(route('estadoCivils.index'));
    }

    /**
     * Display the specified EstadoCivil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadoCivil = $this->estadoCivilRepository->findWithoutFail($id);

        if (empty($estadoCivil)) {
            Flash::error('Estado Civil not found');

            return redirect(route('estadoCivils.index'));
        }

        return view('estado_civils.show')->with('estadoCivil', $estadoCivil);
    }

    /**
     * Show the form for editing the specified EstadoCivil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadoCivil = $this->estadoCivilRepository->findWithoutFail($id);

        if (empty($estadoCivil)) {
            Flash::error('Estado Civil not found');

            return redirect(route('estadoCivils.index'));
        }

        return view('estado_civils.edit')->with('estadoCivil', $estadoCivil);
    }

    /**
     * Update the specified EstadoCivil in storage.
     *
     * @param  int              $id
     * @param UpdateEstadoCivilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadoCivilRequest $request)
    {
        $estadoCivil = $this->estadoCivilRepository->findWithoutFail($id);

        if (empty($estadoCivil)) {
            Flash::error('Estado Civil not found');

            return redirect(route('estadoCivils.index'));
        }

        $estadoCivil = $this->estadoCivilRepository->update($request->all(), $id);

        Flash::success('Estado Civil updated successfully.');

        return redirect(route('estadoCivils.index'));
    }

    /**
     * Remove the specified EstadoCivil from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadoCivil = $this->estadoCivilRepository->findWithoutFail($id);

        if (empty($estadoCivil)) {
            Flash::error('Estado Civil not found');

            return redirect(route('estadoCivils.index'));
        }

        $this->estadoCivilRepository->delete($id);

        Flash::success('Estado Civil deleted successfully.');

        return redirect(route('estadoCivils.index'));
    }
}
