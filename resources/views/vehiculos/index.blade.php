@extends('plantilla.plantilla')

@section('contenedor')
    <h1>Vehiculos registrados</h1>
    <table class="table table-primary">
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
                <th>{{ $vehiculo->VEHPLACA }}</th>
                <td>{{ $vehiculo->DATID }}</td>
                <td>{{ $vehiculo->CATID }}</td>
                <td>{{ $vehiculo->VEHMODELO }}</td>
                <td>{{ $vehiculo->VEHMARCA }}</td>
                <td>{{ $vehiculo->VEHESTADO }}</td>
                <td>{{ $vehiculo->VEHPRECIO }}</td>
              </tr>
              @endforeach
        </tbody>
      </table>
@endsection
