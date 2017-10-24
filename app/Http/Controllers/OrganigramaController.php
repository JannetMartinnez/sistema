<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrganigramaRequest;
use App\Http\Requests\UpdateOrganigramaRequest;
use App\Repositories\OrganigramaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrganigramaController extends AppBaseController
{
    /** @var  OrganigramaRepository */
    private $organigramaRepository;

    public function __construct(OrganigramaRepository $organigramaRepo)
    {
        $this->organigramaRepository = $organigramaRepo;
    }

    /**
     * Display a listing of the Organigrama.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->organigramaRepository->pushCriteria(new RequestCriteria($request));
        $organigramas = $this->organigramaRepository->all();

        return view('organigramas.index')
            ->with('organigramas', $organigramas);
    }

    /**
     * Show the form for creating a new Organigrama.
     *
     * @return Response
     */
    public function create()
    {
        return view('organigramas.create');
    }

    /**
     * Store a newly created Organigrama in storage.
     *
     * @param CreateOrganigramaRequest $request
     *
     * @return Response
     */
    public function store(CreateOrganigramaRequest $request)
    {
        $input = $request->all();

        $organigrama = $this->organigramaRepository->create($input);

        Flash::success('Organigrama saved successfully.');

        return redirect(route('organigramas.index'));
    }

    /**
     * Display the specified Organigrama.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $organigrama = $this->organigramaRepository->findWithoutFail($id);

        if (empty($organigrama)) {
            Flash::error('Organigrama not found');

            return redirect(route('organigramas.index'));
        }

        return view('organigramas.show')->with('organigrama', $organigrama);
    }

    /**
     * Show the form for editing the specified Organigrama.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $organigrama = $this->organigramaRepository->findWithoutFail($id);

        if (empty($organigrama)) {
            Flash::error('Organigrama not found');

            return redirect(route('organigramas.index'));
        }

        return view('organigramas.edit')->with('organigrama', $organigrama);
    }

    /**
     * Update the specified Organigrama in storage.
     *
     * @param  int              $id
     * @param UpdateOrganigramaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrganigramaRequest $request)
    {
        $organigrama = $this->organigramaRepository->findWithoutFail($id);

        if (empty($organigrama)) {
            Flash::error('Organigrama not found');

            return redirect(route('organigramas.index'));
        }

        $organigrama = $this->organigramaRepository->update($request->all(), $id);

        Flash::success('Organigrama updated successfully.');

        return redirect(route('organigramas.index'));
    }

    /**
     * Remove the specified Organigrama from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $organigrama = $this->organigramaRepository->findWithoutFail($id);

        if (empty($organigrama)) {
            Flash::error('Organigrama not found');

            return redirect(route('organigramas.index'));
        }

        $this->organigramaRepository->delete($id);

        Flash::success('Organigrama deleted successfully.');

        return redirect(route('organigramas.index'));
    }
}
