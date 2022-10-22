<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorVistas extends Controller
{
    public function showTabla(){
        return view('Tabla');
    }
    public function showFormulario(){
        return view('Formulario');
    }

    public function entrando(validadorFormulario $req){
        //En caso de que si pase la validacion
        return redirect()->route('Tab')->with('confirmacion','Tu info esta siendo procesada');
    }
}
