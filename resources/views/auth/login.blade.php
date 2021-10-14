<link rel="stylesheet" href="css/estilo.css">
<form method="POST" action="{{ route('login.verify') }}">
    @csrf
<div class="login">
    <div class="form">
      <img src="./img/icono.png" alt="">
      <input type="text" name="email" placeholder="Usuario">
      <div style="color: red">{{ $errors->first("email") }}</div>
      <input type="password" name="password" placeholder="Contraseña">
      <div style="color: red">{{ $errors->first("password") }}</div>
      <input type="submit" value="Iniciar Sesion" class="submit">
    </div>
  </div>
@if (session('mensaje'))
    <center><p style="color: white"{{ session('mensaje') }}</p></center>
@endif
</form>
