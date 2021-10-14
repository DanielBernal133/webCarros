<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;

class Carrito extends Controller
{
    public function index(){
        $vehiculos = Vehiculos::all();
        return view('plantilla.index', compact('vehiculos'));
    }
}
