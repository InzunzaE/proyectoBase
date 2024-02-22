<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;
use App\Models\oficio;

class HomeController extends Controller
{
    public function home(){
        $oficios=Oficio::all();
        return view('home',compact('oficios'));
    }

    public function homeAdministrador(){
        $noticias = Noticia::all();

        return view('administrador.home', compact('noticias'));
    }
}
