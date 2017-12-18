<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class LlamaController extends Controller
{
    function llama1(){
	    $pdf=PDF::loadView('llama');
	    return $pdf->download('llama.pdf');
    }
}
