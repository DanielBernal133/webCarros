<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosPersonales;
use Illuminate\Support\Facades\Auth;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*echo "<pre>";
        var_dump($datos);
        echo "</pre>";*/
        return view('auth.index')->with('datos' , DatosPersonales::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datospersonales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuedatos = new DatosPersonales;
        //$nuedatos ->USUID = Auth::user()->USUID;
        $nuedatos ->Nombre = $request->input("nombre");
        $nuedatos ->Apellido = $request->input("apellido");
        $nuedatos ->Documento = $request->input("tipo");
        $nuedatos ->Numerodocumento = $request->input("numero");
        $nuedatos ->telefono = $request->input("telefono");
        $nuedatos ->correo = $request->input("correo");
        $nuedatos->save();
        echo "Datos guardados";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DatosPersonales $datos)
    {
        echo "<pre>";
        var_dump($datos);
        echo "</pre>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosPersonales $datos)
    {
        echo "<pre>";
        var_dump($datos);
        echo "</pre>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
