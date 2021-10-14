<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Venta Vehiculos</title>
	<link href="./css/estilos2.css" rel="stylesheet" >
    
    <script src="https://kit.fontawesome.com/e0a1bf980c.js" crossorigin="anonymous"></script>
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<img src="./img/icono blanco.png" alt="">
			</div>
			<nav class="menu">
                
                @if (Auth::user()->ROL=='Administrador')
                <a href="{{ url('pdf') }}">PDF</a>
                <a  href="{{ url('vehiculos/create') }}">Registrar Vehiculo</a>
                @endif
                @if (Auth::user()->ROL=='Comprador')
                <a>Perfil comprador</a>
                @endif
                @if (Auth::user()->ROL=='Vendedor')
                <a  href="{{ url('vehiculos/create') }}">Registrar Vehiculo</a>
                @endif
			</nav>
		</div>
	</header>
	<div class="capa">
        <div class="contenidocarrito">
            <h1 style="color: white">Vehiculos a la venta</h1>
            @foreach ($vehiculos as $vehiculo)
            <div class="carrito">
                <img src="./img/icono-fondo.png" alt="">
                <div class="informacion">
                    <p style="color: #41198A">Modelo Vehiculo:</p><p>{{ $vehiculo->VEHMODELO }}</p><br>
                    <p style="color: #41198A">Nombre Vehiculo:</p><p>{{ $vehiculo->VEHMARCA }}</p><br>
                    <p style="color: #41198A">Precio Vehiculo:</p><p>{{ $vehiculo->VEHPRECIO }}</p><br>
                    <input type="submit" value="Agregar al carrito" class="submit">
                    @if (session('mensaje_exito'))
                        <center><p style="color: white"{{ session('mensaje_exito') }}</p></center>
                    @endif
                </div>

            </div>
            @endforeach
        </div>
    </div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
        <center><div class="icono">
            <img src="./img/user.png">
        </div></center>
        <center><h2>{{ Auth::user()->email }}</h2></center>
		<nav>
            <a href="#">Perfil</a>
			<a href="{{ route('logout') }}">Cerrar Sesion</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
