<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppBaseController;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Silber\Bouncer\Bouncer;
use \Validatore;
use App\Models\AspiranteGeneral;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $email=$user->email;
        $id_usu=$user->id;
        if($user->isAn('aspirante')){
            $aspi=AspiranteGeneral::where('usuario_id',$id_usu)->first();
            $id_aspi=$aspi->id;
            $ruta="aspiranteGenerals/".$id_aspi."/edit";
            return redirect($ruta);
        }
        else
        {
          return view('home');
        }
       
    }
}
