<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CreateAspiranteGeneralRequest;
use App\Http\Requests\StroreAspiranteGeneralRequest;
use App\Http\Requests\UpdateAspiranteGeneralRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Models\Pais;
use App\Models\Municipio;
use App\Models\CarreraOfertada;
use App\Models\Carrera;
use App\Models\EstadoCivil;
use App\Models\PreparatoriaProcedencia;
use App\Models\ZonaProcedencia;
use App\Models\EntidadFederativa;
use App\Models\AspiranteGeneral;
use App\Models\AspiranteSocioecomico; 
use App\Models\AspiranteSalud;
use App\Models\ConfigFechaInscripcion;
use App\Repositories\AspiranteGeneralRepository;
use App\Repositories\AspiranteSocioecomicoRepository;
use App\Repositories\AspiranteSaludRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Silber\Bouncer\Bouncer;
use Illuminate\Support\Facades\Auth;
use \Validatore;
use Carbon\Carbon;
use PDF;

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

    /**fecha_limite_pago
     * Show the form for creating a new AspiranteGeneral.
     *
     * @return Response
     */
    public function create()
    {
        $entidadesFederativas=EntidadFederativa::orderBy('nombre_entidad')->pluck('nombre_entidad','id');
        $paises=Pais::orderBy('pais')->pluck('pais','id');
        $municipios=Municipio::orderBy('nombre_municipio')->pluck('nombre_municipio','id');
        $carreraOfertada=CarreraOfertada::orderBy('carreras_id')->pluck('carreras_id','id');

        $carr=CarreraOfertada::consu()->pluck('nombre_carrera','id');
        $prepas=PreparatoriaProcedencia::orderBy('nombre_preparatoria')->pluck('nombre_preparatoria','id');
        $edo_civil=EstadoCivil::orderBy('id')->pluck('descripcion','id');
        $zona_proc=ZonaProcedencia::orderBy('id')->pluck('descripcion','id');
        $modo='crear';
        $solicitud=AspiranteGeneral::where('folio_solicitud','>',1)->max('folio_solicitud');
        $folio=$solicitud+1;
        $busca_periodo=ConfigFechaInscripcion::where('sol_asp_fi','<',Carbon::now())->Where('sol_asp_ff','>',Carbon::now())->first();
        $periodo=$busca_periodo['periodo_entrada_id'];
        $modalidad=$busca_periodo['tipo_modalidad_id'];
        $cve_pago='01999';
        $fechaLimite=substr($busca_periodo['fecha_limite_pago'],0,10);
        $importe=$busca_periodo['cantidad_pagar'];

        return view('aspirante_generals.create',compact('entidadesFederativas','paises','municipios',
            'carreraOfertada','prepas','carr','edo_civil','zona_proc','modo','folio','periodo','modalidad','cve_pago','fechaLimite','importe'));
    }

    /**
     * Store a newly created AspiranteGeneral in storage.
     *
     * @param CreateAspiranteGeneralRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
    
        $user = Auth::user();
        //Si es aspirante validar doble el seguro y correo
        //Validar datos en laravel 5.5

        //if($user->isAn('aspirante')){
        if ( Auth::check() )
        {
            //De lo contrario validara sin doble correo y seguro social
            $request->validate([
            'correo_elect_dom_actual'=>'required',
            'apellido_paterno_aspirante'=>'required',
            'apellido_materno_aspirante'=>'required',
            'nombres_aspirante'=>'required',
            'numero_seguro_social'=>'required|unique:aspirantes_generales',
            'correo_elect_dom_actual' => 'required|min:6|unique:aspirantes_generales'

        ]);
        }
        else{
            $request->validate([
                'correo_elect_dom_actual'=>'required',
                'apellido_paterno_aspirante'=>'required',
                'apellido_materno_aspirante'=>'required',
                'nombres_aspirante'=>'required',
                'numero_seguro_social'=>'required|unique:aspirantes_generales',
                'numero_seguro_social_confirmation' => 'required|min:6|same:numero_seguro_social',
                'correo_elect_dom_actual' => 'required|min:6|unique:aspirantes_generales', 
                'correo_elect_dom_actual_confirmation' => 'required|min:6|same:correo_elect_dom_actual'
            ]);  
        }


        $input = $request->all();
        //Obtenemos el email del aspirante
        $email=$input['correo_elect_dom_actual'];

        $nombre=Str::Upper(trim($input['apellido_paterno_aspirante'].' '.$input['apellido_materno_aspirante'].' '.$input['nombres_aspirante']));
        function aleatorio($cantidad){
        	$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        	$cadena = "";
        	for($i=0;$i<$cantidad;$i++){
        		$cadena .= substr($caracteres,rand(0,strlen($caracteres)),1);
        	}
        	return $cadena;
        }
        //Crear un objeto usuario
        User::create([
            'name' => $nombre,
            'email' => $email,
            //'password' => bcrypt(aleatorio(10)),
            'password' => bcrypt('123'),

        ]);
        $role=3;
        $user=User::where('email',$email)->first();
        $user->assign($role);
        $id=$user->id;
        $input['usuario_id']=$id;
        $input['status_asp']=1;
        //Crea un aspirante generales
        $aspiranteGeneral = $this->aspiranteGeneralRepository->create($input);
        //Conocer el id que genero del aspirante general
        $asp=AspiranteGeneral::where('folio_solicitud',$input['folio_solicitud'])->first();
        $idAspGral=$asp->id;

        //Crea un aspirante socioeconómicos
        $inputSocio= new AspiranteSocioecomico();
        $inputSocio->aspirantes_generales_id=$idAspGral;
        $inputSocio->save();
        //Crea un aspirante salud
        $inputSalud= new AspiranteSalud();
        $inputSalud->aspirantes_generales_id=$idAspGral;
        $inputSalud->save();

        //Crea un aspirante documento
        //$aspiranteGeneralDoc = $this->aspiranteGeneralRepository->create($input);
        //Enviar correo electrónico al usuario
        //Creamos un arreglo asociativo con los daatos que vamos a enviar
        /*$data['email']=$input['correo_elect_dom_actual'];
        //$data['password']= aleatorio(10);
        $data['password']= '123';

        Mail::send('emails.message',$data, function ($message) use ($data){
            //$message->from('contacto@itslp.edu.mx', 'ITSLP');
            $message->from('aletse00@gmail.com', 'ITSLP');
            $message->subject('Usuario y contraseña ITSLP');

            //$message->to($request->email);
            $message->to($data['email'],'Computo');

        });*/

        $ojo='Aspirante Genereal guardado éxitosamente '.$email;
        Flash::success($ojo);
        if($user->allow('alta_preregistro')){ 
            return redirect('http://www.itslp.edu.mx/index.php/aspirantes/educacion-presencial/proceso-de-admision');

        }
        else
        {
           return redirect(route('aspiranteGenerals.index'));   
        }
        

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
        $entidadesFederativas=EntidadFederativa::orderBy('nombre_entidad')->pluck('nombre_entidad','id');
        $paises=Pais::orderBy('pais')->pluck('pais','id');
        

        //$municipios=Municipio::orderBy('nombre_municipio')->pluck('nombre_municipio','id');
        $idEntFed=$aspiranteGeneral->entidad_federativa_dom_actual_id;
        $municipios=Municipio::municipios($idEntFed)->pluck('nombre_municipio','id');

        $carrerasOf=CarreraOfertada::orderBy('carreras_id')->pluck('carreras_id','id');

        $carr=CarreraOfertada::consu()->pluck('nombre_carrera','id');

        $prepas=PreparatoriaProcedencia::orderBy('nombre_preparatoria')->pluck('nombre_preparatoria','id');
        $edo_civil=EstadoCivil::orderBy('id')->pluck('descripcion','id');
        $zona_proc=ZonaProcedencia::orderBy('id')->pluck('descripcion','id');
        $modo='editar';
        $folio=$aspiranteGeneral->folio_solicitud;
        $busca_periodo=ConfigFechaInscripcion::where('sol_asp_fi','<',Carbon::now())->Where('sol_asp_ff','>',Carbon::now())->first();
        $periodo=$busca_periodo['periodo_entrada_id'];
        $modalidad=$busca_periodo['tipo_modalidad_id'];
        $cve_pago='01999';
        $fechaLimite=substr($busca_periodo['fecha_limite_pago'],0,10);
        $importe=$busca_periodo['cantidad_pagar'];
        $asp_soc=AspiranteSocioecomico::where('aspirantes_generales_id',$id)->first();
        $idSoc=$asp_soc->id;
        $asp_sal=AspiranteSalud::where('aspirantes_generales_id',$id)->first();
        $idSal=$asp_sal->id;
        $status_asp=$aspiranteGeneral->status_asp;
        $captura_generales = str_contains($status_asp, '2');
        $captura_socioeco = str_contains($status_asp, '3');
        $captura_salud = str_contains($status_asp, '4');


        return view('aspirante_generals.edit',compact('entidadesFederativas','paises','municipios','carrerasOf','prepas','carr','edo_civil','zona_proc','aspiranteGeneral','modo','folio','periodo','modalidad','cve_pago','fechaLimite','importe','idSoc','idSal','captura_generales','captura_socioeco','captura_salud'));
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


        //Actualiza el status del aspirante "Datos - Socioeconómicos capturados"
        $aspiranteGeneral=AspiranteGeneral::where('id',$id)->first();
        $status=$aspiranteGeneral->status_asp;
        $v=$status;
        if($status==1 or $status==null){
           $v=12;   
        }else{
            $value = str_contains($v, '2');
            if($value==false){
                $v = str_finish($v,'2');
            }
        }

        DB::table('aspirantes_generales')
            ->where('id',$id)
            ->update(['status_asp' =>$v]);

        //Consulta que id es el registro de socioeconómico para redireccionarlo
        $asp_soc=AspiranteSocioecomico::where('aspirantes_generales_id',$id)->first();
        $idSoc=$asp_soc->id;           

        Flash::success('Aspirante General updated successfully.');

       return redirect(route('aspiranteSocioecomicos.edit',[$idSoc]));
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

    public function registro(){
        $solicitud=AspiranteGeneral::where('folio_solicitud','>=',1)->max('folio_solicitud');
        $folio=$solicitud+1;
        $busca_periodo=ConfigFechaInscripcion::where('sol_asp_fi','<',Carbon::now())->Where('sol_asp_ff','>',Carbon::now())->first();
        $periodo=$busca_periodo['periodo_entrada_id'];
        $modalidad=$busca_periodo['tipo_modalidad_id'];

        return view('aspirante_generals.createRegistro',compact('folio','periodo','modalidad'));
    }
    public function referenciaB($pers,$cve_pago,$fechaLimite,$imp){
        $cve_banco="3947"; //Clave del banco
        $ord='01';
        $aux=$imp;
        echo "Clave banco ".$cve_banco."<br/>";
        echo "Fecha limite es ".$fechaLimite."<br/>";
        echo "Peresona".$pers."<br/";
        echo "importe ".$imp."<br/"; 
        echo "Tipo de pago ".$ord."<br/>";
        echo "Auxiliar es el importe sin decimal".$aux."<br/>";

        $valorasignado=array(1,3,7);
        //Arreglo de longitud importe +2$importecompleto=strlen($importe)+2;
        $n = strval($imp);

        preg_match_all("/\d/", $n, $importe);
        $i=count($importe[0])-1;
        $j=count($importe[0])+2-1;
        $k=count($valorasignado)-1;
        $resultado=0;
        $digitoverificador=0;
        echo "i es la longitud del importe menos uno --->".$i."<br/>";
        echo "j es la longitud del importe completo menos uno ---->".$j."<br/>";
        echo "k es la longitud del valor asignado menos uno ---->".$k."<br/>";
        echo "resultado es cero ".$resultado."<br/>";
        echo "digitoverificador es cero ".$digitoverificador."<br/>";

        //==================LLenado del arreglo
        while($aux>0){
            if($aux%10 >= 0){
                $importecompleto[$i]=$aux%10;
                $i--;
            }
            if($i<0){
                $importecompleto[count($importecompleto)-2]=0;
                $importecompleto[count($importecompleto)-1]=0;
                break;
            }
            
            $aux=$aux/10;
        }
        
        //===================Sacar resultado

        while($j>=0){
            if($k<0){
                $k=count($valorasignado)-1;
            }
            $resultado=$resultado+($importecompleto[$j]*$valorasignado[$k]);
            $j--;
            $k--;
        }
        
        $digitoverificador=$resultado%10;
        echo "Digito verificaor es: ----->".$digitoverificador."<br/>";      
/*Dig Validador del importe
        public static int digitoverificador(String importe){
        int aux=Integer.parseInt(importe);
        int valorasignado[]={1,3,7};
        int importecompleto[]=new int [importe.length()+2];
        int i=importe.length()-1;
        int j=importecompleto.length-1;
        int k=valorasignado.length-1;
        int resultado = 0;
        //int l=valorasignado.length;
        int digitoverificador=0;
        
        
        //==================LLenado del arreglo
        while(aux>0){
            if(aux%10 >= 0){
                importecompleto[i]=aux%10;
                i--;
            }
            if(i<0){
                importecompleto[importecompleto.length-2]=0;
                importecompleto[importecompleto.length-1]=0;
                break;
            }
            
            aux=aux/10;
        }
        //===================Sacar resultado
        while(j>=0){
            if(k<0){
                k=valorasignado.length-1;
            }
            resultado=resultado+(importecompleto[j]*valorasignado[k]);
            j--;
            k--;
        }
        
        digitoverificador=resultado%10;
        return digitoverificador;
    }//digitoverificador
    
*/

  

        // $dig_validador_imp=     //Digito validador del importe, a cada digito del importe
                                //se le asigna de derecha a izquierda:7,3,1. Multiplicar y s
                                //sumar, dividir entre 10 y el residuo es el digito
                                //Fecha Juliana, al dia se resta 1, al mes se resta 1 y se  multiplica por 31, al año de 4 digitos le restamos 2013 y se multiplica por 372, se suman, esa es el resultado
        //$fecha_jul=
        //$dig_control=2 //Dado por el usario
        //$ref=$cve_banco.$ord.$pers.$cve_pago.$fecha_jul.$dig_validador_imp.$dig_control;
        // $digitos_verificadores=   //Digitos verificadores de línea, si la línea tiene caracteres alfabéticos, asignarles un valor númerico de acuerdo a la siguiente tabla:
        //$letrasValor={"ABCDEFGHIJKLMNOPQRSTUVWXYZ};
        //$numValor={"12345678912345678923456789"};
        //A cada elemento se le agrega un digito de derecha a izquierda 11,13,17,19,23
        //Multiplicar cada dígito por el valor que le corresponda, sumar y dividirlo entre 97, al residuo sumar 1
        // $ref=$ref.$digitos_verificadores;
        //$ref=$cve_banco.$ordOext.$pers.$cve_pago;
        //return $ref;
        return "Estamos trabajando";
    }
    public function referenciaC($pers,$cve_pago,$fechaLimite,$imp){

        $cve_banco="3947"; //Clave del banco
        $ord='01';

        /* Digito validador del importe, a cada digito del importe se le asigna de derecha a izquierda:7,3,1. Multiplicar y sumar, dividir entre 10 y el residuo es el digito 
        */
        $n = strval($imp);
        preg_match_all("/\d/", ($n.'00'), $importe);
        $valor=array(7,3,1);
        $d=0;$suma=0;
        for($i=0;$i<count($importe[0]);$i++){
            $suma=$suma+($importe[0][$i]*$valor[$d]);
            if($d==2)$d=0; else $d++;
        }
        $digitoverificador=$suma%10;
        /*Fecha Juliana, al dia se resta 1, al mes se resta 1 y se  multiplica por 31, al año de 4 digitos le restamos 2013 y se multiplica por 372, se suman, esa es el resultado */
        $dia=substr($fechaLimite,8,2);
        $mes=(int)(substr($fechaLimite,5,2));
        $año=substr($fechaLimite,0,4);
        $fechajuliana=($dia-1)+(($mes-1)*31)+(($año-2013)*372);
        $dig_control=2; //Dado por el usario 2 significa que si se verifique la fecha límite de pago
        $ref=$cve_banco.$ord.$pers.$fechajuliana.$digitoverificador.$dig_control;
        // Digitos verificadores de línea, si la línea tiene caracteres alfabéticos, asignarles un valor númerico de acuerdo a la siguiente tabla:
        // "ABCDEFGHIJKLMNOPQRSTUVWXYZ", con el valor de la siguiente tabla "12345678912345678923456789"
        // A cada elemento se le agrega un digito de derecha a izquierda 11,13,17,19,23
        //Multiplicar cada dígito por el valor que le corresponda, sumar y dividirlo entre 97, al residuo sumar 1
        $n = strval($ref);
        preg_match_all("/\d/", ($n.'00'), $referencia);
        $valor=array(11,13,17,19,23);
        $d=0;$suma=0;
        for($i=0;$i<count($referencia[0]);$i++){
            $suma=$suma+($referencia[0][$i]*$valor[$d]);
            if($d==4)$d=0; else $d++;
        }
        $digitosverificadores=($suma%97)+1;
        $mesesN=array(1=>"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
             "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $referenciafinal=$ref.$digitosverificadores;
        $fechaLimite=$dia."/".$mesesN[$mes]."/".$año;
        $pdf=PDF::loadView('llama',array('referenciafinal'=>$referenciafinal,'importe'=>$imp,'fechaLimite'=>$fechaLimite));
        return $pdf->download('referencia.pdf');
    }
}
