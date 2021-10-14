<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;

class Comprador extends Controller
{
    public function vendedor()
    {
        return view('vehiculos.comprado')->with('vehiculos' , Vehiculos::paginate(10));
    }
}
