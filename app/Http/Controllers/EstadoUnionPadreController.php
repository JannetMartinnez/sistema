<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadoUnionPadreRequest;
use App\Http\Requests\UpdateEstadoUnionPadreRequest;
use App\Repositories\EstadoUnionPadreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadoUnionPadreController extends AppBaseController
{
    /** @var  EstadoUnionPadreRepository */
    private $estadoUnionPadreRepository;

    public function __construct(EstadoUnionPadreRepository $estadoUnionPadreRepo)
    {
        $this->estadoUnionPadreRepository = $estadoUnionPadreRepo;
    }

    /**
     * Display a listing of the EstadoUnionPadre.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadoUnionPadreRepository->pushCriteria(new RequestCriteria($request));
        $estadoUnionPadres = $this->estadoUnionPadreRepository->all();

        return view('estado_union_padres.index')
            ->with('estadoUnionPadres', $estadoUnionPadres);
    }

    /**
     * Show the form for creating a new EstadoUnionPadre.
     *
     * @return Response
     */
    public function create()
    {
        return view('estado_union_padres.create');
    }

    /**
     * Store a newly created EstadoUnionPadre in storage.
     *
     * @param CreateEstadoUnionPadreRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadoUnionPadreRequest $request)
    {
        $input = $request->all();

        $estadoUnionPadre = $this->estadoUnionPadreRepository->create($input);

        Flash::success('Estado Union Padre saved successfully.');

        return redirect(route('estadoUnionPadres.index'));
    }

    /**
     * Display the specified EstadoUnionPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadoUnionPadre = $this->estadoUnionPadreRepository->findWithoutFail($id);

        if (empty($estadoUnionPadre)) {
            Flash::error('Estado Union Padre not found');

            return redirect(route('estadoUnionPadres.index'));
        }

        return view('estado_union_padres.show')->with('estadoUnionPadre', $estadoUnionPadre);
    }

    /**
     * Show the form for editing the specified EstadoUnionPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadoUnionPadre = $this->estadoUnionPadreRepository->findWithoutFail($id);

        if (empty($estadoUnionPadre)) {
            Flash::error('Estado Union Padre not found');

            return redirect(route('estadoUnionPadres.index'));
        }

        return view('estado_union_padres.edit')->with('estadoUnionPadre', $estadoUnionPadre);
    }

    /**
     * Update the specified EstadoUnionPadre in storage.
     *
     * @param  int              $id
     * @param UpdateEstadoUnionPadreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadoUnionPadreRequest $request)
    {
        $estadoUnionPadre = $this->estadoUnionPadreRepository->findWithoutFail($id);

        if (empty($estadoUnionPadre)) {
            Flash::error('Estado Union Padre not found');

            return redirect(route('estadoUnionPadres.index'));
        }

        $estadoUnionPadre = $this->estadoUnionPadreRepository->update($request->all(), $id);

        Flash::success('Estado Union Padre updated successfully.');

        return redirect(route('estadoUnionPadres.index'));
    }

    /**
     * Remove the specified EstadoUnionPadre from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadoUnionPadre = $this->estadoUnionPadreRepository->findWithoutFail($id);

        if (empty($estadoUnionPadre)) {
            Flash::error('Estado Union Padre not found');

            return redirect(route('estadoUnionPadres.index'));
        }

        $this->estadoUnionPadreRepository->delete($id);

        Flash::success('Estado Union Padre deleted successfully.');

        return redirect(route('estadoUnionPadres.index'));
    }
}
