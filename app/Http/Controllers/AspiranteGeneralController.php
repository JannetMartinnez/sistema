<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspiranteGeneralRequest;
use App\Http\Requests\UpdateAspiranteGeneralRequest;
use App\Repositories\AspiranteGeneralRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;

class AspiranteGeneralController extends AppBaseController
{
    /** @var  AspiranteGeneralRepository */
    private $aspiranteGeneralRepository;

    public function __construct(AspiranteGeneralRepository $aspiranteGeneralRepo)
    {
        $this->aspiranteGeneralRepository = $aspiranteGeneralRepo;
    }

    /**
     * Display a listing of the AspiranteGeneral.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aspiranteGeneralRepository->pushCriteria(new RequestCriteria($request));
        $aspiranteGenerals = $this->aspiranteGeneralRepository->all();

        return view('aspirante_generals.index')
            ->with('aspiranteGenerals', $aspiranteGenerals);
    }

    /**
     * Show the form for creating a new AspiranteGeneral.
     *
     * @return Response
     */
    public function create()
    {
        return view('aspirante_generals.create');
    }

    /**
     * Store a newly created AspiranteGeneral in storage.
     *
     * @param CreateAspiranteGeneralRequest $request
     *
     * @return Response
     */
    public function store(CreateAspiranteGeneralRequest $request)
    {

        //Al crear un aspirante, también crearemos un usuario para el
        $input = $request->all();

        //Obtenemos el email del aspirante
        $email=$input['correo_elect_dom_actual'];
        $nombre=$input['apellidos_aspirante'].' '.$input['nombres_aspirante'];
        //Crear un objeto usuario

        User::create([
            'name' => Str::upper(trim($nombre)),
            'email' => $email,
            'password' => bcrypt('123'),
        ]);
        $flight = User::where('email',$email)->first();

        $id=$flight->id;
        //echo "El valor de id del usuario es".$flight;

        $aspiranteGeneral = $this->aspiranteGeneralRepository->create($input);

        Flash::success('Aspirante Generales agregado con éxito.');

        return redirect(route('aspiranteGenerals.index'));
    }

    /**
     * Display the specified AspiranteGeneral.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspiranteGeneral = $this->aspiranteGeneralRepository->findWithoutFail($id);

        if (empty($aspiranteGeneral)) {
            Flash::error('Aspirante General not found');

            return redirect(route('aspiranteGenerals.index'));
        }

        return view('aspirante_generals.show')->with('aspiranteGeneral', $aspiranteGeneral);
    }

    /**
     * Show the form for editing the specified AspiranteGeneral.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspiranteGeneral = $this->aspiranteGeneralRepository->findWithoutFail($id);

        if (empty($aspiranteGeneral)) {
            Flash::error('Aspirante General not found');

            return redirect(route('aspiranteGenerals.index'));
        }

        return view('aspirante_generals.edit')->with('aspiranteGeneral', $aspiranteGeneral);
    }

    /**
     * Update the specified AspiranteGeneral in storage.
     *
     * @param  int              $id
     * @param UpdateAspiranteGeneralRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspiranteGeneralRequest $request)
    {
        $aspiranteGeneral = $this->aspiranteGeneralRepository->findWithoutFail($id);

        if (empty($aspiranteGeneral)) {
            Flash::error('Aspirante General not found');

            return redirect(route('aspiranteGenerals.index'));
        }

        $aspiranteGeneral = $this->aspiranteGeneralRepository->update($request->all(), $id);

        Flash::success('Aspirante General updated successfully.');

        return redirect(route('aspiranteGenerals.index'));
    }

    /**
     * Remove the specified AspiranteGeneral from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspiranteGeneral = $this->aspiranteGeneralRepository->findWithoutFail($id);

        if (empty($aspiranteGeneral)) {
            Flash::error('Aspirante General not found');

            return redirect(route('aspiranteGenerals.index'));
        }

        $this->aspiranteGeneralRepository->delete($id);

        Flash::success('Aspirante General deleted successfully.');

        return redirect(route('aspiranteGenerals.index'));
    }
}
