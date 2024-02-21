<?php

namespace App\Http\Controllers;
use App\Models\Consultar;
use Illuminate\Http\Request;

class ConsultarController extends Controller
{
    public function ConsultarOficios(){
        
        return view("ConsultarOficio");
    }
}
