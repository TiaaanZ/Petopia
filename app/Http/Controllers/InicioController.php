<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio(){
        return view('inicio.inicio');
    }
    public function contacto(){
        return view('inicio.contacto');
    }
    public function reg(){
        return view('inicio.reg');
    }

    public function inventario(){
        return view('inventario.inventario');
    }

    public function adopciones(){
        return view('adopciones.adopciones');
    }


}

    