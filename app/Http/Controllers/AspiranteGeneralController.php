<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\CreateAspiranteGeneralRequest;
use App\Http\Requests\StroreAspiranteGeneralRequest;
use App\Http\Requests\UpdateAspiranteGeneralRequest;
use App\Repositories\AspiranteGeneralRepository;
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
use App\Models\PreparatoriaProcedencia;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\EntidadFederativa;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Silber\Bouncer\Bouncer;
use Illuminate\Support\Facades\Auth;
use \Validatore;

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
        $entidadesFederativas=EntidadFederativa::orderBy('nombre_entidad')->pluck('nombre_entidad','id');
        $paises=Pais::orderBy('pais')->pluck('pais','id');
        $municipios=Municipio::orderBy('nombre_municipio')->pluck('nombre_municipio','id');
        $carreraOfertada=CarreraOfertada::orderBy('carreras_id')->pluck('carreras_id','id');

        $carr=CarreraOfertada::consu()->pluck('nombre_carrera','id');
        $prepas=PreparatoriaProcedencia::orderBy('nombre_preparatoria')->pluck('nombre_preparatoria','id');

        return view('aspirante_generals.create',compact('entidadesFederativas','paises','municipios',
            'carreraOfertada','prepas','carr'));
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
            'numero_seguro_social'=>'required',
            'correo_elect_dom_actual' => 'required|min:6|required'
        ]);
        }
        else{
            $request->validate([
                'correo_elect_dom_actual'=>'required',
                'apellido_paterno_aspirante'=>'required',
                'apellido_materno_aspirante'=>'required',
                'nombres_aspirante'=>'required',
                'numero_seguro_social'=>'required',
                'numero_seguro_social_confirmation' => 'required|min:6|same:numero_seguro_social',
                'correo_elect_dom_actual' => 'required|min:6|required', 
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
        
        //Crea un aspirante
        $aspiranteGeneral = $this->aspiranteGeneralRepository->create($input);

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
        
        $municipios=Municipio::orderBy('nombre_municipio')->pluck('nombre_municipio','id');

        $carrerasOf=CarreraOfertada::orderBy('carreras_id')->pluck('carreras_id','id');

         $carr=CarreraOfertada::consu()->pluck('nombre_carrera','id');

        $prepas=PreparatoriaProcedencia::orderBy('nombre_preparatoria')->pluck('nombre_preparatoria','id');

        return view('aspirante_generals.edit',compact('entidadesFederativas','paises','municipios','carrerasOf','prepas','carr','aspiranteGeneral'));
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

    public function registro(){
        return view('aspirante_generals.createRegistro');
    }
}
