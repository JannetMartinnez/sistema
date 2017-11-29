<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstudioPadreRequest;
use App\Http\Requests\UpdateEstudioPadreRequest;
use App\Repositories\EstudioPadreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstudioPadreController extends AppBaseController
{
    /** @var  EstudioPadreRepository */
    private $estudioPadreRepository;

    public function __construct(EstudioPadreRepository $estudioPadreRepo)
    {
        $this->estudioPadreRepository = $estudioPadreRepo;
    }

    /**
     * Display a listing of the EstudioPadre.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estudioPadreRepository->pushCriteria(new RequestCriteria($request));
        $estudioPadres = $this->estudioPadreRepository->all();

        return view('estudio_padres.index')
            ->with('estudioPadres', $estudioPadres);
    }

    /**
     * Show the form for creating a new EstudioPadre.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudio_padres.create');
    }

    /**
     * Store a newly created EstudioPadre in storage.
     *
     * @param CreateEstudioPadreRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudioPadreRequest $request)
    {
        $input = $request->all();

        $estudioPadre = $this->estudioPadreRepository->create($input);

        Flash::success('Estudio Padre saved successfully.');

        return redirect(route('estudioPadres.index'));
    }

    /**
     * Display the specified EstudioPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudioPadre = $this->estudioPadreRepository->findWithoutFail($id);

        if (empty($estudioPadre)) {
            Flash::error('Estudio Padre not found');

            return redirect(route('estudioPadres.index'));
        }

        return view('estudio_padres.show')->with('estudioPadre', $estudioPadre);
    }

    /**
     * Show the form for editing the specified EstudioPadre.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudioPadre = $this->estudioPadreRepository->findWithoutFail($id);

        if (empty($estudioPadre)) {
            Flash::error('Estudio Padre not found');

            return redirect(route('estudioPadres.index'));
        }

        return view('estudio_padres.edit')->with('estudioPadre', $estudioPadre);
    }

    /**
     * Update the specified EstudioPadre in storage.
     *
     * @param  int              $id
     * @param UpdateEstudioPadreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudioPadreRequest $request)
    {
        $estudioPadre = $this->estudioPadreRepository->findWithoutFail($id);

        if (empty($estudioPadre)) {
            Flash::error('Estudio Padre not found');

            return redirect(route('estudioPadres.index'));
        }

        $estudioPadre = $this->estudioPadreRepository->update($request->all(), $id);

        Flash::success('Estudio Padre updated successfully.');

        return redirect(route('estudioPadres.index'));
    }

    /**
     * Remove the specified EstudioPadre from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudioPadre = $this->estudioPadreRepository->findWithoutFail($id);

        if (empty($estudioPadre)) {
            Flash::error('Estudio Padre not found');

            return redirect(route('estudioPadres.index'));
        }

        $this->estudioPadreRepository->delete($id);

        Flash::success('Estudio Padre deleted successfully.');

        return redirect(route('estudioPadres.index'));
    }
}
