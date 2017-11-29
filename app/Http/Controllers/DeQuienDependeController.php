<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDeQuienDependeRequest;
use App\Http\Requests\UpdateDeQuienDependeRequest;
use App\Repositories\DeQuienDependeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DeQuienDependeController extends AppBaseController
{
    /** @var  DeQuienDependeRepository */
    private $deQuienDependeRepository;

    public function __construct(DeQuienDependeRepository $deQuienDependeRepo)
    {
        $this->deQuienDependeRepository = $deQuienDependeRepo;
    }

    /**
     * Display a listing of the DeQuienDepende.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->deQuienDependeRepository->pushCriteria(new RequestCriteria($request));
        $deQuienDependes = $this->deQuienDependeRepository->all();

        return view('de_quien_dependes.index')
            ->with('deQuienDependes', $deQuienDependes);
    }

    /**
     * Show the form for creating a new DeQuienDepende.
     *
     * @return Response
     */
    public function create()
    {
        return view('de_quien_dependes.create');
    }

    /**
     * Store a newly created DeQuienDepende in storage.
     *
     * @param CreateDeQuienDependeRequest $request
     *
     * @return Response
     */
    public function store(CreateDeQuienDependeRequest $request)
    {
        $input = $request->all();

        $deQuienDepende = $this->deQuienDependeRepository->create($input);

        Flash::success('De Quien Depende saved successfully.');

        return redirect(route('deQuienDependes.index'));
    }

    /**
     * Display the specified DeQuienDepende.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $deQuienDepende = $this->deQuienDependeRepository->findWithoutFail($id);

        if (empty($deQuienDepende)) {
            Flash::error('De Quien Depende not found');

            return redirect(route('deQuienDependes.index'));
        }

        return view('de_quien_dependes.show')->with('deQuienDepende', $deQuienDepende);
    }

    /**
     * Show the form for editing the specified DeQuienDepende.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $deQuienDepende = $this->deQuienDependeRepository->findWithoutFail($id);

        if (empty($deQuienDepende)) {
            Flash::error('De Quien Depende not found');

            return redirect(route('deQuienDependes.index'));
        }

        return view('de_quien_dependes.edit')->with('deQuienDepende', $deQuienDepende);
    }

    /**
     * Update the specified DeQuienDepende in storage.
     *
     * @param  int              $id
     * @param UpdateDeQuienDependeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDeQuienDependeRequest $request)
    {
        $deQuienDepende = $this->deQuienDependeRepository->findWithoutFail($id);

        if (empty($deQuienDepende)) {
            Flash::error('De Quien Depende not found');

            return redirect(route('deQuienDependes.index'));
        }

        $deQuienDepende = $this->deQuienDependeRepository->update($request->all(), $id);

        Flash::success('De Quien Depende updated successfully.');

        return redirect(route('deQuienDependes.index'));
    }

    /**
     * Remove the specified DeQuienDepende from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $deQuienDepende = $this->deQuienDependeRepository->findWithoutFail($id);

        if (empty($deQuienDepende)) {
            Flash::error('De Quien Depende not found');

            return redirect(route('deQuienDependes.index'));
        }

        $this->deQuienDependeRepository->delete($id);

        Flash::success('De Quien Depende deleted successfully.');

        return redirect(route('deQuienDependes.index'));
    }
}
