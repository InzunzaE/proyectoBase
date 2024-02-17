<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OficioController extends Controller
{
    public function RegistrarOficios(){
        
        return view("RegistrarOficio");
    }
}
