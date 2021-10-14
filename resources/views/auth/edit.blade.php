<form action="POST" action="{{ url('datos2/' . $datos->USUID) }}">
    @method('PUT')
    @csrf
    <h1>Hola {{ $datos->DATNOMBRE }}</h1>
</form>
