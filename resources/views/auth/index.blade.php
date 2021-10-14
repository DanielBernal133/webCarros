<h1>Hola</h1>
@foreach ($datos as $dato)
<a href="{{ url('datos/' . $dato->DATID ) }}">
    Ver mas
</a>
<a href="{{ url('datos/' . $dato->DATID. "/edit" ) }}">
    ACTUALIZAR
</a>
@endforeach


