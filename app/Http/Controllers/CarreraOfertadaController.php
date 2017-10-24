<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarreraOfertadaRequest;
use App\Http\Requests\UpdateCarreraOfertadaRequest;
use App\Repositories\CarreraOfertadaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Carrera;


class CarreraOfertadaController extends AppBaseController
{
    /** @var  CarreraOfertadaRepository */
    private $carreraOfertadaRepository;

    public function __construct(CarreraOfertadaRepository $carreraOfertadaRepo)
    {
        $this->carreraOfertadaRepository = $carreraOfertadaRepo;
    }

    /**
     * Display a listing of the CarreraOfertada.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->carreraOfertadaRepository->pushCriteria(new RequestCriteria($request));
        $carreraOfertadas = $this->carreraOfertadaRepository->all();

        return view('carrera_ofertadas.index')
            ->with('carreraOfertadas', $carreraOfertadas);
    }

    /**
     * Show the form for creating a new CarreraOfertada.
     *
     * @return Response
     */
    public function create()
    {
        $carreras=Carrera::orderBy('nombre_carrera')->pluck('nombre_carrera','id');
        return view('carrera_ofertadas.create',compact('carreras'));
    }

    /**
     * Store a newly created CarreraOfertada in storage.
     *
     * @param CreateCarreraOfertadaRequest $request
     *
     * @return Response
     */
    public function store(CreateCarreraOfertadaRequest $request)
    {
        $input = $request->all();

        $carreraOfertada = $this->carreraOfertadaRepository->create($input);

        Flash::success('Carrera Ofertada saved successfully.');

        return redirect(route('carreraOfertadas.index'));
    }

    /**
     * Display the specified CarreraOfertada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carreraOfertada = $this->carreraOfertadaRepository->findWithoutFail($id);

        if (empty($carreraOfertada)) {
            Flash::error('Carrera Ofertada not found');

            return redirect(route('carreraOfertadas.index'));
        }

        return view('carrera_ofertadas.show')->with('carreraOfertada', $carreraOfertada);
    }

    /**
     * Show the form for editing the specified CarreraOfertada.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carreras=Carrera::orderBy('nombre_carrera')->pluck('nombre_carrera','id');
        $carreraOfertada = $this->carreraOfertadaRepository->findWithoutFail($id);

        if (empty($carreraOfertada)) {
            Flash::error('Carrera Ofertada not found');

            return redirect(route('carreraOfertadas.index'));
        }

        //return view('carrera_ofertadas.edit')->with('carreraOfertada', $carreraOfertada);
        return view('carrera_ofertadas.edit',compact('carreras','carreraOfertada'));
    }

    /**
     * Update the specified CarreraOfertada in storage.
     *
     * @param  int              $id
     * @param UpdateCarreraOfertadaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarreraOfertadaRequest $request)
    {
        $carreraOfertada = $this->carreraOfertadaRepository->findWithoutFail($id);

        if (empty($carreraOfertada)) {
            Flash::error('Carrera Ofertada not found');

            return redirect(route('carreraOfertadas.index'));
        }

        $carreraOfertada = $this->carreraOfertadaRepository->update($request->all(), $id);

        Flash::success('Carrera Ofertada updated successfully.');

        return redirect(route('carreraOfertadas.index'));
    }

    /**
     * Remove the specified CarreraOfertada from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carreraOfertada = $this->carreraOfertadaRepository->findWithoutFail($id);

        if (empty($carreraOfertada)) {
            Flash::error('Carrera Ofertada not found');

            return redirect(route('carreraOfertadas.index'));
        }

        $this->carreraOfertadaRepository->delete($id);

        Flash::success('Carrera Ofertada deleted successfully.');

        return redirect(route('carreraOfertadas.index'));
    }
}
