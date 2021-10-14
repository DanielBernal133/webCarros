@extends('plantilla.plantilla')

@section('contenedor')
<link rel="stylesheet" href="css/estilos.css">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Datos vehiculos</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if ( session("mensaje_exito"))
                <div>{{ session("mensaje_exito") }} </div>
            @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>Placa</th>
                      <th>Nombre Propietario</th>
                      <th>Categoria</th>
                      <th>Modelo</th>
                      <th>Marca</th>
                      <th>Estado</th>
                      <th>Precio</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($vehiculos as $vehiculo)
                      <tr>
                          <td>{{ $vehiculo->VEHPLACA }}</td>
                          <td>{{ $vehiculo->Usuario()->first()->DATNOMBRE }}</td>
                          <td>{{ $vehiculo->categorias()->first()->CATIPO }}</td>
                          <td>{{ $vehiculo->VEHMODELO }}</td>
                          <td>{{ $vehiculo->VEHMARCA }}</td>
                          <td>{{ $vehiculo->VEHESTADO }}</td>
                          <td>{{ $vehiculo->VEHPRECIO }}</td>
                        </tr>
                        @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
