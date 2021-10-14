<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;
use App\Categorias;
use App\Http\Requests\VehRequest;

class VentaVehiculos extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('vehiculos.table')->with('vehiculos' , Vehiculos::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categorias::all();

        return view('vehiculos.create')->with('categorias' , $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehRequest $request)
    {
        $nuevoveh = new Vehiculos;
        $nuevoveh->VEHPLACA= $request->input("placa");
        $nuevoveh->CATID= $request->input("categoria");
        $nuevoveh->DATID= 4;
        $nuevoveh->VEHMODELO= $request->input("modelo");
        $nuevoveh->VEHMARCA= $request->input("marca");
        $nuevoveh->VEHESTADO= $request->input("estado");
        $nuevoveh->VEHPRECIO= $request->input("precio");
        $nuevoveh->save();

        return redirect("carrito")->with('mensaje_exito' , "Vehiculo Registrado Exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculos $vehiculo)
    {
        echo "<pre>";
        var_dump($vehiculo);
        echo "</pre>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculos $vehiculo)
    {
        $categorias = Categorias::all();

        return view('vehiculos.edit')->with('vehiculo' , $vehiculo)->with('categorias' , $categorias);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculos $vehiculo)
    {
        $vehiculo->CATID= $request->input("categoria");
        $vehiculo->VEHMODELO= $request->input("modelo");
        $vehiculo->VEHMARCA= $request->input("marca");
        $vehiculo->VEHESTADO= $request->input("estado");
        $vehiculo->VEHPRECIO= $request->input("precio");
        $vehiculo->save();

        return redirect("vehiculos")->with('mensaje_exito' , "Vehiculo Actualizado Exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($IDVEHICULO)
    {
        return redirect('vehiculos')->with('mensaje_exito', "Vehiculo eliminado");
    }


}
