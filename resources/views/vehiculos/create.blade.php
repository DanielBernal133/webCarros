@extends('plantilla.plantilla')

@section('contenedor2')
<form method="POST" action="{{ url('vehiculos') }}" class="form-horizontal">
    @csrf
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Placa</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('placa') }}" name="placa" type="text" placeholder="" class="form-control input-md">
      <strong><p class="text-danger">{{$errors->first("placa")}}</p></strong>
      </div>
    </div>

    <!-- Select Basic -->

    <!-- Select Basic -->
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
      <label class="col-md-4 control-label" for="textinput">Modelo</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('modelo') }}" name="modelo" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Marca</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('marca') }}" name="marca" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Estado</label>
      <div class="col-md-4">
        <select id="selectbasic" name="estado" class="form-control">
          <option value="Nuevo">Nuevo</option>
          <option value="Usado">Usado</option>
        </select>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Precio Vehículo</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('precio') }}" name="precio" type="number" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
      <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
    </div>
  </div>
    </form>
@endsection
