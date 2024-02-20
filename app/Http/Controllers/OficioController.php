<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio;

class OficioController extends Controller
{
    public function RegistrarOficios(){
        
        return view("RegistrarOficio");
    }
    public function GuardarOficio(Request $datos){
        Oficio::create([ 
            'folio'=>$datos->input('folio'),
            'lugar'=>$datos->input('lugar'),
            'fecha'=>'2024-02-14',
            'cuerpo'=>$datos->input('cuerpo'),
            'asunto'=>$datos->input('asunto'),
            'foto_firma'=>'foto.png', 
            'oficio_pdf'=>'oficio.pdf' 

        ]);

        
        return redirect("/home");
    }
}
