<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspiranteSocioecomicoRequest;
use App\Http\Requests\UpdateAspiranteSocioecomicoRequest;
use App\Repositories\AspiranteSocioecomicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
//
use App\Models\EstudioPadre;
use App\Models\QuienVivesActual;
use App\Models\ocupacion_padres;
use App\Models\CasaVive;
use App\Models\NumerosPalabras;
use App\Models\EstadoUnionPadre;
use App\Models\DeQuienDepende;
use App\Models\AspiranteGeneral;
//
class AspiranteSocioecomicoController extends AppBaseController
{
    /** @var  AspiranteSocioecomicoRepository */
    private $aspiranteSocioecomicoRepository;

    public function __construct(AspiranteSocioecomicoRepository $aspiranteSocioecomicoRepo)
    {
        $this->aspiranteSocioecomicoRepository = $aspiranteSocioecomicoRepo;
    }

    /**
     * Display a listing of the AspiranteSocioecomico.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aspiranteSocioecomicoRepository->pushCriteria(new RequestCriteria($request));
        $aspiranteSocioecomicos = $this->aspiranteSocioecomicoRepository->all();

        return view('aspirante_socioecomicos.index')
            ->with('aspiranteSocioecomicos', $aspiranteSocioecomicos);
    }

    /**
     * Show the form for creating a new AspiranteSocioecomico.
     *
     * @return Response
     */
    public function create()
    {
        //
        $estudios=EstudioPadre::orderBy('id')->pluck('descripcion','id');
        $quienvives=QuienVivesActual::orderBy('id')->pluck('descripcion','id');
       //
        $ocupacionpadres=ocupacion_padres::orderBy('id')->pluck('desripcion','id');
        //la tabla esta mal escrito el campo es descripcion en la tabla ocupacion__padres
        $casavives=CasaVive::orderBy('id')->pluck('descripcion','id');
        $numerospalabras=NumerosPalabras::orderBy('id')->pluck('descripcion','id');
        $estadounion=EstadoUnionPadre::orderBy('id')->pluck('descripcion','id');
        $quiendependes=DeQuienDepende::orderBy('id')->pluck('descripcion','id');
        //traer datos de otra tabla con el id//
        $aspirante_general=AspiranteGeneral::where('id',4)->first();
        //campos a traer{    
        $nombre=$aspirante_general->apellido_paterno_aspirante.' '.$aspirante_general->apellido_materno_aspirante.' '.$aspirante_general->nombres_aspirante;
        
        $solicitud=AspiranteGeneral::where('folio_solicitud','>',1)->max('folio_solicitud');
        $folio=$solicitud+1;
        
        $modo='crear';
        return view('aspirante_socioecomicos.create',compact('estudios','quienvives','ocupacionpadres','casavives','numerospalabras','estadounion','quiendependes','nombre','folio','modo'));
         //}
    }

    /**
     * Store a newly created AspiranteSocioecomico in storage.
     *
     * @param CreateAspiranteSocioecomicoRequest $request
     *
     * @return Response
     */
    public function store(CreateAspiranteSocioecomicoRequest $request)
    {
        $input = $request->all();

        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->create($input);

        Flash::success('Aspirante Socioecomico saved successfully.');

        return redirect(route('aspiranteSocioecomicos.index'));
    }

    /**
     * Display the specified AspiranteSocioecomico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->findWithoutFail($id);

        if (empty($aspiranteSocioecomico)) {
            Flash::error('Aspirante Socioecomico not found');

            return redirect(route('aspiranteSocioecomicos.index'));
        }

        return view('aspirante_socioecomicos.show')->with('aspiranteSocioecomico', $aspiranteSocioecomico);
    }

    /**
     * Show the form for editing the specified AspiranteSocioecomico.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->findWithoutFail($id);

        if (empty($aspiranteSocioecomico)) {
            Flash::error('Aspirante Socioecomico not found');

            return redirect(route('aspiranteSocioecomicos.index'));
        }
//
        $estudios=EstudioPadre::orderBy('id')->pluck('descripcion','id');
        $quienvives=QuienVivesActual::orderBy('id')->pluck('descripcion','id');
       //
        $ocupacionpadres=ocupacion_padres::orderBy('id')->pluck('desripcion','id');
        //la tabla esta mal escrito el campo es descripcion en la tabla ocupacion__padres
        $casavives=CasaVive::orderBy('id')->pluck('descripcion','id');
        $numerospalabras=NumerosPalabras::orderBy('id')->pluck('descripcion','id');
        $estadounion=EstadoUnionPadre::orderBy('id')->pluck('descripcion','id');
        $quiendependes=DeQuienDepende::orderBy('id')->pluck('descripcion','id');
        //traer datos de otra tabla con el id//
        $aspirante_general=AspiranteGeneral::where('id',174)->first();
        //campos a traer{    
        $nombre=$aspirante_general->apellido_paterno_aspirante.' '.$aspirante_general->apellido_materno_aspirante.' '.$aspirante_general->nombres_aspirante;


        $solicitud=AspiranteGeneral::where('folio_solicitud','>',1)->max('folio_solicitud');
        $folio=$solicitud+1;
         $modo='editar';
        return view('aspirante_socioecomicos.edit',compact('aspiranteSocioecomico','estudios','quienvives','ocupacionpadres','casavives','numerospalabras','estadounion','quiendependes','nombre','folio','modo'));
    }

    /**
     * Update the specified AspiranteSocioecomico in storage.
     *
     * @param  int              $id
     * @param UpdateAspiranteSocioecomicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspiranteSocioecomicoRequest $request)
    {
        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->findWithoutFail($id);

        if (empty($aspiranteSocioecomico)) {
            Flash::error('Aspirante Socioecomico not found');

            return redirect(route('aspiranteSocioecomicos.index'));
        }

        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->update($request->all(), $id);

        Flash::success('Aspirante Socioecomico updated successfully.');

        return redirect(route('aspiranteSocioecomicos.index'));
    }

    /**
     * Remove the specified AspiranteSocioecomico from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspiranteSocioecomico = $this->aspiranteSocioecomicoRepository->findWithoutFail($id);

        if (empty($aspiranteSocioecomico)) {
            Flash::error('Aspirante Socioecomico not found');

            return redirect(route('aspiranteSocioecomicos.index'));
        }

        $this->aspiranteSocioecomicoRepository->delete($id);

        Flash::success('Aspirante Socioecomico deleted successfully.');

        return redirect(route('aspiranteSocioecomicos.index'));
    }
}
