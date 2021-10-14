<form method="POST" action="{{ url('datos2') }}" class="form-horizontal">
    @csrf
    <!-- Text input-->

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre Usuario</label>
      <div class="col-md-4">
      <input id="textinput" name="nombre" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido Usuario</label>
      <div class="col-md-4">
      <input id="textinput" name="apellido" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Tipo documento</label>
      <div class="col-md-4">
      <input id="textinput" name="tipo" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Numero documento</label>
      <div class="col-md-4">
      <input id="textinput" name="numero" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Telefono</label>
      <div class="col-md-4">
      <input id="textinput" name="telefono" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Correo</label>
      <div class="col-md-4">
      <input id="textinput" name="correo" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
      </div>
    </div>

    </fieldset>
    </form>
