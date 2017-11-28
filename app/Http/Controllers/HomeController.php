<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Models\AspiranteGeneral;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppBaseController;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Silber\Bouncer\Bouncer;
use \Validatore;

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
dd($email);
        if($user->isAn('aspirante')){
            $aspi=AspiranteGeneral::where('usuario_id',$id_usu)->first();
            $id_aspi=$aspi->id;
              
            return redirect('aspiranteGenerals/$id_aspi/edit');
        }
        else
        {
          return view('home');
     
    }
}
