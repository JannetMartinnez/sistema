<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCasaViveRequest;
use App\Http\Requests\UpdateCasaViveRequest;
use App\Repositories\CasaViveRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CasaViveController extends AppBaseController
{
    /** @var  CasaViveRepository */
    private $casaViveRepository;

    public function __construct(CasaViveRepository $casaViveRepo)
    {
        $this->casaViveRepository = $casaViveRepo;
    }

    /**
     * Display a listing of the CasaVive.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->casaViveRepository->pushCriteria(new RequestCriteria($request));
        $casaVives = $this->casaViveRepository->all();

        return view('casa_vives.index')
            ->with('casaVives', $casaVives);
    }

    /**
     * Show the form for creating a new CasaVive.
     *
     * @return Response
     */
    public function create()
    {
        return view('casa_vives.create');
    }

    /**
     * Store a newly created CasaVive in storage.
     *
     * @param CreateCasaViveRequest $request
     *
     * @return Response
     */
    public function store(CreateCasaViveRequest $request)
    {
        $input = $request->all();

        $casaVive = $this->casaViveRepository->create($input);

        Flash::success('Casa Vive saved successfully.');

        return redirect(route('casaVives.index'));
    }

    /**
     * Display the specified CasaVive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $casaVive = $this->casaViveRepository->findWithoutFail($id);

        if (empty($casaVive)) {
            Flash::error('Casa Vive not found');

            return redirect(route('casaVives.index'));
        }

        return view('casa_vives.show')->with('casaVive', $casaVive);
    }

    /**
     * Show the form for editing the specified CasaVive.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $casaVive = $this->casaViveRepository->findWithoutFail($id);

        if (empty($casaVive)) {
            Flash::error('Casa Vive not found');

            return redirect(route('casaVives.index'));
        }

        return view('casa_vives.edit')->with('casaVive', $casaVive);
    }

    /**
     * Update the specified CasaVive in storage.
     *
     * @param  int              $id
     * @param UpdateCasaViveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCasaViveRequest $request)
    {
        $casaVive = $this->casaViveRepository->findWithoutFail($id);

        if (empty($casaVive)) {
            Flash::error('Casa Vive not found');

            return redirect(route('casaVives.index'));
        }

        $casaVive = $this->casaViveRepository->update($request->all(), $id);

        Flash::success('Casa Vive updated successfully.');

        return redirect(route('casaVives.index'));
    }

    /**
     * Remove the specified CasaVive from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $casaVive = $this->casaViveRepository->findWithoutFail($id);

        if (empty($casaVive)) {
            Flash::error('Casa Vive not found');

            return redirect(route('casaVives.index'));
        }

        $this->casaViveRepository->delete($id);

        Flash::success('Casa Vive deleted successfully.');

        return redirect(route('casaVives.index'));
    }
}
