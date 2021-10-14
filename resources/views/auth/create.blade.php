@extends('plantilla.plantilla')

@section('contenedor')
<h1>Nuevo Usuario</h1>
    <form method="POST" action="{{ url('usuarios') }}">
        @csrf
        <div class="mt-4">
            <label class="form-label" for="email">Nombre Usuario</label>
            <input value="{{ old('email') }}" class="form-control" type="text" id="email" name="email">

        </div>
        <div class="mt-4">
            <label class="form-label" for="password">Contraseña</label>
            <input value="{{ old('password') }}" class="form-control" type="password" id="password" name="password">

        </div>
        <div class="mt-4">
            <label class="form-label" for="password1">Confirmar contraseña</label>
            <input class="form-control" type="password" id="password1" name="password_confirmation">
        </div>
        <div class="mt-4">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

    </form>
@endsection
