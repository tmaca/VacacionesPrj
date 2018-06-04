<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ComprobarMes;

use Illuminate\Http\Request;
use App\Meses;

class Comprobar extends Controller
{
    public function comprobarMes(Request $request){

        $mes = new Mes;
        $mes -> mes = $request->mes;
        $mes -> save();
        return (view('existe'));

    }
    public function __construct(){
        $this->middleware('tamara');
    }
}
