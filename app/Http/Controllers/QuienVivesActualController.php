<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuienVivesActualRequest;
use App\Http\Requests\UpdateQuienVivesActualRequest;
use App\Repositories\QuienVivesActualRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class QuienVivesActualController extends AppBaseController
{
    /** @var  QuienVivesActualRepository */
    private $quienVivesActualRepository;

    public function __construct(QuienVivesActualRepository $quienVivesActualRepo)
    {
        $this->quienVivesActualRepository = $quienVivesActualRepo;
    }

    /**
     * Display a listing of the QuienVivesActual.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->quienVivesActualRepository->pushCriteria(new RequestCriteria($request));
        $quienVivesActuals = $this->quienVivesActualRepository->all();

        return view('quien_vives_actuals.index')
            ->with('quienVivesActuals', $quienVivesActuals);
    }

    /**
     * Show the form for creating a new QuienVivesActual.
     *
     * @return Response
     */
    public function create()
    {
        return view('quien_vives_actuals.create');
    }

    /**
     * Store a newly created QuienVivesActual in storage.
     *
     * @param CreateQuienVivesActualRequest $request
     *
     * @return Response
     */
    public function store(CreateQuienVivesActualRequest $request)
    {
        $input = $request->all();

        $quienVivesActual = $this->quienVivesActualRepository->create($input);

        Flash::success('Quien Vives Actual saved successfully.');

        return redirect(route('quienVivesActuals.index'));
    }

    /**
     * Display the specified QuienVivesActual.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quienVivesActual = $this->quienVivesActualRepository->findWithoutFail($id);

        if (empty($quienVivesActual)) {
            Flash::error('Quien Vives Actual not found');

            return redirect(route('quienVivesActuals.index'));
        }

        return view('quien_vives_actuals.show')->with('quienVivesActual', $quienVivesActual);
    }

    /**
     * Show the form for editing the specified QuienVivesActual.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quienVivesActual = $this->quienVivesActualRepository->findWithoutFail($id);

        if (empty($quienVivesActual)) {
            Flash::error('Quien Vives Actual not found');

            return redirect(route('quienVivesActuals.index'));
        }

        return view('quien_vives_actuals.edit')->with('quienVivesActual', $quienVivesActual);
    }

    /**
     * Update the specified QuienVivesActual in storage.
     *
     * @param  int              $id
     * @param UpdateQuienVivesActualRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuienVivesActualRequest $request)
    {
        $quienVivesActual = $this->quienVivesActualRepository->findWithoutFail($id);

        if (empty($quienVivesActual)) {
            Flash::error('Quien Vives Actual not found');

            return redirect(route('quienVivesActuals.index'));
        }

        $quienVivesActual = $this->quienVivesActualRepository->update($request->all(), $id);

        Flash::success('Quien Vives Actual updated successfully.');

        return redirect(route('quienVivesActuals.index'));
    }

    /**
     * Remove the specified QuienVivesActual from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quienVivesActual = $this->quienVivesActualRepository->findWithoutFail($id);

        if (empty($quienVivesActual)) {
            Flash::error('Quien Vives Actual not found');

            return redirect(route('quienVivesActuals.index'));
        }

        $this->quienVivesActualRepository->delete($id);

        Flash::success('Quien Vives Actual deleted successfully.');

        return redirect(route('quienVivesActuals.index'));
    }
}
