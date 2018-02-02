<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CreateAspiranteSaludRequest;
use App\Http\Requests\UpdateAspiranteSaludRequest;
use App\Repositories\AspiranteSaludRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\AspiranteGeneral;
use App\Models\PeriodoEscolar;
use App\Models\AspiranteSocioecomico; 
use App\Models\ConfigFechaInscripcion;
use Carbon\Carbon;
use PDF;


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

  //traer datos de otra tabla con el id//
        $aspirante_general=AspiranteGeneral::where('id',72)->first();
        //campos a traer{    
        $apellidopaterno=$aspirante_general->apellido_paterno_aspirante;
        $apellidomaterno=$aspirante_general->apellido_materno_aspirante;
        $nombres=$aspirante_general->nombres_aspirante;
        
        $numeross=$aspirante_general->numero_seguro_social;

        return view('aspirante_saluds.create',compact('apellidopaterno','apellidomaterno','nombres','numeross'));
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
              
        $aspirante_general=AspiranteGeneral::where('id',$aspiranteSalud->aspirantes_generales_id)->first();   
        $nombre=$aspirante_general->apellido_paterno_aspirante.' '.$aspirante_general->apellido_materno_aspirante.' '.$aspirante_general->nombres_aspirante;
        $numero_ss=$aspirante_general->numero_seguro_social;
        $idAspGral=$aspiranteSalud->aspirantes_generales_id;
        $folio=$aspirante_general->folio_solicitud;
        $idPeriodo=$aspirante_general->periodo_id;

        $asp_soc=AspiranteSocioecomico::where('aspirantes_generales_id',$idAspGral)->first();
        $idSoc=$asp_soc->id;

        $modo='editar';

        $periodoE=PeriodoEscolar::where('id',$idPeriodo)->first();
        $desPeriodo=$periodoE->identificacion_larga;

        $busca_periodo=ConfigFechaInscripcion::where('sol_asp_fi','<',Carbon::now())->Where('sol_asp_ff','>',Carbon::now())->first();
        $periodo=$busca_periodo['periodo_entrada_id'];
        $modalidad=$busca_periodo['tipo_modalidad_id'];
        $cve_pago='01999';
        $fechaLimite=substr($busca_periodo['fecha_limite_pago'],0,10);
        $importe=$busca_periodo['cantidad_pagar'];
        return view('aspirante_saluds.edit',compact('aspiranteSalud','idAspGral','nombre','numero_ss','modo','folio','periodo','modalidad','cve_pago','fechaLimite','importe','idSoc','desPeriodo'));
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
        
        $aspiranteGeneral=AspiranteGeneral::where('id',$aspiranteSalud->aspirantes_generales_id)->first();
        $status=$aspiranteGeneral->status_asp;
        if($status<4 or $status==null){
            DB::table('aspirantes_generales')
            ->where('id',$aspiranteSalud->aspirantes_generales_id)
            ->update(['status_asp' => 4]);
        }

        

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
