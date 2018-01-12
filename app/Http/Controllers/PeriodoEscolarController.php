<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeriodoEscolarRequest;
use App\Http\Requests\UpdatePeriodoEscolarRequest;
use App\Repositories\PeriodoEscolarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PeriodoEscolarController extends AppBaseController
{
    /** @var  PeriodoEscolarRepository */
    private $periodoEscolarRepository;

    public function __construct(PeriodoEscolarRepository $periodoEscolarRepo)
    {
        $this->periodoEscolarRepository = $periodoEscolarRepo;
    }

    /**
     * Display a listing of the PeriodoEscolar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->periodoEscolarRepository->pushCriteria(new RequestCriteria($request));
        $periodoEscolars = $this->periodoEscolarRepository->all();

        return view('periodo_escolars.index')
            ->with('periodoEscolars', $periodoEscolars);
    }

    /**
     * Show the form for creating a new PeriodoEscolar.
     *
     * @return Response
     */
    public function create()
    {
        return view('periodo_escolars.create');
    }

    /**
     * Store a newly created PeriodoEscolar in storage.
     *
     * @param CreatePeriodoEscolarRequest $request
     *
     * @return Response
     */
    public function store(CreatePeriodoEscolarRequest $request)
    {
        $input = $request->all();

        $periodoEscolar = $this->periodoEscolarRepository->create($input);

        Flash::success('Periodo Escolar saved successfully.');

        return redirect(route('periodoEscolars.index'));
    }

    /**
     * Display the specified PeriodoEscolar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $periodoEscolar = $this->periodoEscolarRepository->findWithoutFail($id);

        if (empty($periodoEscolar)) {
            Flash::error('Periodo Escolar not found');

            return redirect(route('periodoEscolars.index'));
        }

        return view('periodo_escolars.show')->with('periodoEscolar', $periodoEscolar);
    }

    /**
     * Show the form for editing the specified PeriodoEscolar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $periodoEscolar = $this->periodoEscolarRepository->findWithoutFail($id);

        if (empty($periodoEscolar)) {
            Flash::error('Periodo Escolar not found');

            return redirect(route('periodoEscolars.index'));
        }

        return view('periodo_escolars.edit')->with('periodoEscolar', $periodoEscolar);
    }

    /**
     * Update the specified PeriodoEscolar in storage.
     *
     * @param  int              $id
     * @param UpdatePeriodoEscolarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePeriodoEscolarRequest $request)
    {
        $periodoEscolar = $this->periodoEscolarRepository->findWithoutFail($id);

        if (empty($periodoEscolar)) {
            Flash::error('Periodo Escolar not found');

            return redirect(route('periodoEscolars.index'));
        }

        $periodoEscolar = $this->periodoEscolarRepository->update($request->all(), $id);

        Flash::success('Periodo Escolar updated successfully.');

        return redirect(route('periodoEscolars.index'));
    }

    /**
     * Remove the specified PeriodoEscolar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $periodoEscolar = $this->periodoEscolarRepository->findWithoutFail($id);

        if (empty($periodoEscolar)) {
            Flash::error('Periodo Escolar not found');

            return redirect(route('periodoEscolars.index'));
        }

        $this->periodoEscolarRepository->delete($id);

        Flash::success('Periodo Escolar deleted successfully.');

        return redirect(route('periodoEscolars.index'));
    }
}
