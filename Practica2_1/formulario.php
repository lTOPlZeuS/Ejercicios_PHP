<?php
  session_start();
  $sesion=$_SESSION['id'];
  if($sesion==null || $sesion==''){
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Formulario</title>
    <link rel="stylesheet" href="css/master.css" />
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="info.php"
              >Inicio <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php">Registrar Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container fluid">
      <form action="coockie.php" method="GET">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Numero de cuenta</label>
            <input
              type="text"
              class="form-control"
              name="Numerocuenta"
              placeholder="Num Cuenta"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nombre</label>
            <input
              type="text"
              class="form-control"
              name="Nombre"
              placeholder="Nombre"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAddress">Primer Apellido</label>
            <input
              type="text"
              class="form-control"
              name="PrimerApellido"
              placeholder="Primer Apellido"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Segundo Apellido</label>
            <input
              type="text"
              class="form-control"
              name="SegundoApellido"
              placeholder="Segundo Apellido"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="FN" />
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Genero</label>
            <select name="Genero" class="form-control">
              <option selected>Seleccionar</option>
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input
              type="password"
              class="form-control"
              name="Contraseña"
              placeholder="Password"
            />
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
  </body>
</html>
