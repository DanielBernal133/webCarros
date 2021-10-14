@extends('plantilla.plantilla')

@section('contenedor2')
<form method="POST" action="{{ url('vehiculos/' . $vehiculo->IDVEHICULO) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <!-- Text input-->

    <!-- Select Basic -->

    <!-- Select Basic -->

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Modelo</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ $vehiculo->VEHMODELO }}" name="modelo" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Categoria</label>
        <div class="col-md-4">
          <select id="selectbasic" name="categoria" class="form-control">
              <option>Selecione el tipo de categoria del Vehiculo</option>
              @foreach ($categorias as $categoria)
              <option value={{ $categoria->CATID }}>{{ $categoria->CATIPO }}</option>
              @endforeach
          </select>
        </div>
      </div>
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Marca</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ $vehiculo->VEHMARCA }}" name="marca" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Estado</label>
      <div class="col-md-4">
        <select id="selectbasic" value="{{ $vehiculo->VEHESTADO }}" name="estado" class="form-control">
          <option value="Nuevo">Nuevo</option>
          <option value="Usado">Usado</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Precio Vehículo</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ $vehiculo->VEHPRECIO }}" name="precio" type="number" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Actualizar</button>
    </div>
  </div>
    </form>
@endsection
