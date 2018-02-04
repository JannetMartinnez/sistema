<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CreateAspiranteSocioecomicoRequest;
use App\Http\Requests\UpdateAspiranteSocioecomicoRequest;
use App\Repositories\AspiranteSocioecomicoRepository;
use App\Repositories\AspiranteGeneralRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\AspiranteSalud;
use App\Models\EstudioPadre;
use App\Models\QuienVivesActual;
use App\Models\ocupacion_padres;
use App\Models\CasaVive;
use App\Models\NumerosPalabras;
use App\Models\EstadoUnionPadre;
use App\Models\DeQuienDepende;
use App\Models\AspiranteGeneral;
use App\Models\ConfigFechaInscripcion;
use App\Models\PeriodoEscolar;
use Carbon\Carbon;
use PDF;
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
        $aspirante_general=AspiranteGeneral::where('id',$aspiranteSocioecomico->aspirantes_generales_id)->first();
        //campos a traer{    
        $nombre=$aspirante_general->apellido_paterno_aspirante.' '.$aspirante_general->apellido_materno_aspirante.' '.$aspirante_general->nombres_aspirante;
        $idAspGral=$aspiranteSocioecomico->aspirantes_generales_id;
        $modo='editar';
        $folio=$aspirante_general->folio_solicitud;
        $idPeriodo=$aspirante_general->periodo;
        $periodo=PeriodoEscolar::where('id',$idPeriodo)->first();
        $desPeriodo=$periodo['identificacion_larga'];


        $busca_periodo=ConfigFechaInscripcion::where('sol_asp_fi','<',Carbon::now())->Where('sol_asp_ff','>',Carbon::now())->first();
        $periodo=$busca_periodo['periodo_entrada_id'];
        $modalidad=$busca_periodo['tipo_modalidad_id'];
        $cve_pago='01999';
        $fechaLimite=substr($busca_periodo['fecha_limite_pago'],0,10);
        $importe=$busca_periodo['cantidad_pagar'];
        //Id de salud para generar en la vista el hipervínculo
        $asp_sal=AspiranteSalud::where('aspirantes_generales_id',$aspiranteSocioecomico->aspirantes_generales_id)->first();
        $idSal=$asp_sal->id;

        return view('aspirante_socioecomicos.edit',compact('aspiranteSocioecomico','estudios','quienvives','ocupacionpadres','casavives','numerospalabras','estadounion','quiendependes','nombre','folio','desPeriodo','modo','periodo','modalidad','cve_pago','fechaLimite','importe','idAspGral','idSal'));
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
        //Actualiza el status del aspirante "Datos - Socioeconómicos capturados"
        $aspiranteGeneral=AspiranteGeneral::where('id',$aspiranteSocioecomico->aspirantes_generales_id)->first();
        $status=$aspiranteGeneral->status_asp;
        $v=$status;
        if($status==1 or $status==null){
           $v=13;   
        }else
        {
            $value = str_contains($v, '3');
            if($value==false){
                $v = str_finish($v,'3');
            }
        }
        DB::table('aspirantes_generales')
            ->where('id',$aspiranteSocioecomico->aspirantes_generales_id)
            ->update(['status_asp' =>$v]);

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
