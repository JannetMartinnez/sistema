<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createocupacion_padresRequest;
use App\Http\Requests\Updateocupacion_padresRequest;
use App\Repositories\ocupacion_padresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ocupacion_padresController extends AppBaseController
{
    /** @var  ocupacion_padresRepository */
    private $ocupacionPadresRepository;

    public function __construct(ocupacion_padresRepository $ocupacionPadresRepo)
    {
        $this->ocupacionPadresRepository = $ocupacionPadresRepo;
    }

    /**
     * Display a listing of the ocupacion_padres.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ocupacionPadresRepository->pushCriteria(new RequestCriteria($request));
        $ocupacionPadres = $this->ocupacionPadresRepository->all();

        return view('ocupacion_padres.index')
            ->with('ocupacionPadres', $ocupacionPadres);
    }

    /**
     * Show the form for creating a new ocupacion_padres.
     *
     * @return Response
     */
    public function create()
    {
        return view('ocupacion_padres.create');
    }

    /**
     * Store a newly created ocupacion_padres in storage.
     *
     * @param Createocupacion_padresRequest $request
     *
     * @return Response
     */
    public function store(Createocupacion_padresRequest $request)
    {
        $input = $request->all();

        $ocupacionPadres = $this->ocupacionPadresRepository->create($input);

        Flash::success('Ocupacion Padres saved successfully.');

        return redirect(route('ocupacionPadres.index'));
    }

    /**
     * Display the specified ocupacion_padres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ocupacionPadres = $this->ocupacionPadresRepository->findWithoutFail($id);

        if (empty($ocupacionPadres)) {
            Flash::error('Ocupacion Padres not found');

            return redirect(route('ocupacionPadres.index'));
        }

        return view('ocupacion_padres.show')->with('ocupacionPadres', $ocupacionPadres);
    }

    /**
     * Show the form for editing the specified ocupacion_padres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ocupacionPadres = $this->ocupacionPadresRepository->findWithoutFail($id);

        if (empty($ocupacionPadres)) {
            Flash::error('Ocupacion Padres not found');

            return redirect(route('ocupacionPadres.index'));
        }

        return view('ocupacion_padres.edit')->with('ocupacionPadres', $ocupacionPadres);
    }

    /**
     * Update the specified ocupacion_padres in storage.
     *
     * @param  int              $id
     * @param Updateocupacion_padresRequest $request
     *
     * @return Response
     */
    public function update($id, Updateocupacion_padresRequest $request)
    {
        $ocupacionPadres = $this->ocupacionPadresRepository->findWithoutFail($id);

        if (empty($ocupacionPadres)) {
            Flash::error('Ocupacion Padres not found');

            return redirect(route('ocupacionPadres.index'));
        }

        $ocupacionPadres = $this->ocupacionPadresRepository->update($request->all(), $id);

        Flash::success('Ocupacion Padres updated successfully.');

        return redirect(route('ocupacionPadres.index'));
    }

    /**
     * Remove the specified ocupacion_padres from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ocupacionPadres = $this->ocupacionPadresRepository->findWithoutFail($id);

        if (empty($ocupacionPadres)) {
            Flash::error('Ocupacion Padres not found');

            return redirect(route('ocupacionPadres.index'));
        }

        $this->ocupacionPadresRepository->delete($id);

        Flash::success('Ocupacion Padres deleted successfully.');

        return redirect(route('ocupacionPadres.index'));
    }
}
