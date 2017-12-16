<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspiranteSaludRequest;
use App\Http\Requests\UpdateAspiranteSaludRequest;
use App\Repositories\AspiranteSaludRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AspiranteSaludController extends AppBaseController
{
    /** @var  AspiranteSaludRepository */
    private $aspiranteSaludRepository;

    public function __construct(AspiranteSaludRepository $aspiranteSaludRepo)
    {
        $this->aspiranteSaludRepository = $aspiranteSaludRepo;
    }

    /**
     * Display a listing of the AspiranteSalud.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aspiranteSaludRepository->pushCriteria(new RequestCriteria($request));
        $aspiranteSaluds = $this->aspiranteSaludRepository->all();

        return view('aspirante_saluds.index')
            ->with('aspiranteSaluds', $aspiranteSaluds);
    }

    /**
     * Show the form for creating a new AspiranteSalud.
     *
     * @return Response
     */
    public function create()
    {
        return view('aspirante_saluds.create');
    }

    /**
     * Store a newly created AspiranteSalud in storage.
     *
     * @param CreateAspiranteSaludRequest $request
     *
     * @return Response
     */
    public function store(CreateAspiranteSaludRequest $request)
    {
        $input = $request->all();

        $aspiranteSalud = $this->aspiranteSaludRepository->create($input);

        Flash::success('Aspirante Salud saved successfully.');

        return redirect(route('aspiranteSaluds.index'));
    }

    /**
     * Display the specified AspiranteSalud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspiranteSalud = $this->aspiranteSaludRepository->findWithoutFail($id);

        if (empty($aspiranteSalud)) {
            Flash::error('Aspirante Salud not found');

            return redirect(route('aspiranteSaluds.index'));
        }

        return view('aspirante_saluds.show')->with('aspiranteSalud', $aspiranteSalud);
    }

    /**
     * Show the form for editing the specified AspiranteSalud.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspiranteSalud = $this->aspiranteSaludRepository->findWithoutFail($id);

        if (empty($aspiranteSalud)) {
            Flash::error('Aspirante Salud not found');

            return redirect(route('aspiranteSaluds.index'));
        }

        return view('aspirante_saluds.edit')->with('aspiranteSalud', $aspiranteSalud);
    }

    /**
     * Update the specified AspiranteSalud in storage.
     *
     * @param  int              $id
     * @param UpdateAspiranteSaludRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspiranteSaludRequest $request)
    {
        $aspiranteSalud = $this->aspiranteSaludRepository->findWithoutFail($id);

        if (empty($aspiranteSalud)) {
            Flash::error('Aspirante Salud not found');

            return redirect(route('aspiranteSaluds.index'));
        }

        $aspiranteSalud = $this->aspiranteSaludRepository->update($request->all(), $id);

        Flash::success('Aspirante Salud updated successfully.');

        return redirect(route('aspiranteSaluds.index'));
    }

    /**
     * Remove the specified AspiranteSalud from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspiranteSalud = $this->aspiranteSaludRepository->findWithoutFail($id);

        if (empty($aspiranteSalud)) {
            Flash::error('Aspirante Salud not found');

            return redirect(route('aspiranteSaluds.index'));
        }

        $this->aspiranteSaludRepository->delete($id);

        Flash::success('Aspirante Salud deleted successfully.');

        return redirect(route('aspiranteSaluds.index'));
    }
}
