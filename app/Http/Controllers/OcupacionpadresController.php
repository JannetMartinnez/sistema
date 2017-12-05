<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOcupacionpadresRequest;
use App\Http\Requests\UpdateOcupacionpadresRequest;
use App\Repositories\OcupacionpadresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OcupacionpadresController extends AppBaseController
{
    /** @var  OcupacionpadresRepository */
    private $ocupacionpadresRepository;

    public function __construct(OcupacionpadresRepository $ocupacionpadresRepo)
    {
        $this->ocupacionpadresRepository = $ocupacionpadresRepo;
    }

    /**
     * Display a listing of the Ocupacionpadres.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ocupacionpadresRepository->pushCriteria(new RequestCriteria($request));
        $ocupacionpadres = $this->ocupacionpadresRepository->all();

        return view('ocupacionpadres.index')
            ->with('ocupacionpadres', $ocupacionpadres);
    }

    /**
     * Show the form for creating a new Ocupacionpadres.
     *
     * @return Response
     */
    public function create()
    {
        return view('ocupacionpadres.create');
    }

    /**
     * Store a newly created Ocupacionpadres in storage.
     *
     * @param CreateOcupacionpadresRequest $request
     *
     * @return Response
     */
    public function store(CreateOcupacionpadresRequest $request)
    {
        $input = $request->all();

        $ocupacionpadres = $this->ocupacionpadresRepository->create($input);

        Flash::success('Ocupacionpadres saved successfully.');

        return redirect(route('ocupacionpadres.index'));
    }

    /**
     * Display the specified Ocupacionpadres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ocupacionpadres = $this->ocupacionpadresRepository->findWithoutFail($id);

        if (empty($ocupacionpadres)) {
            Flash::error('Ocupacionpadres not found');

            return redirect(route('ocupacionpadres.index'));
        }

        return view('ocupacionpadres.show')->with('ocupacionpadres', $ocupacionpadres);
    }

    /**
     * Show the form for editing the specified Ocupacionpadres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ocupacionpadres = $this->ocupacionpadresRepository->findWithoutFail($id);

        if (empty($ocupacionpadres)) {
            Flash::error('Ocupacionpadres not found');

            return redirect(route('ocupacionpadres.index'));
        }

        return view('ocupacionpadres.edit')->with('ocupacionpadres', $ocupacionpadres);
    }

    /**
     * Update the specified Ocupacionpadres in storage.
     *
     * @param  int              $id
     * @param UpdateOcupacionpadresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOcupacionpadresRequest $request)
    {
        $ocupacionpadres = $this->ocupacionpadresRepository->findWithoutFail($id);

        if (empty($ocupacionpadres)) {
            Flash::error('Ocupacionpadres not found');

            return redirect(route('ocupacionpadres.index'));
        }

        $ocupacionpadres = $this->ocupacionpadresRepository->update($request->all(), $id);

        Flash::success('Ocupacionpadres updated successfully.');

        return redirect(route('ocupacionpadres.index'));
    }

    /**
     * Remove the specified Ocupacionpadres from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ocupacionpadres = $this->ocupacionpadresRepository->findWithoutFail($id);

        if (empty($ocupacionpadres)) {
            Flash::error('Ocupacionpadres not found');

            return redirect(route('ocupacionpadres.index'));
        }

        $this->ocupacionpadresRepository->delete($id);

        Flash::success('Ocupacionpadres deleted successfully.');

        return redirect(route('ocupacionpadres.index'));
    }
}
