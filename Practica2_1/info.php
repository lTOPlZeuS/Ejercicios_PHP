<?php
  session_start();
  require('cuentas.php');
  $sesion=$_SESSION['id'];
  if($sesion==null || $sesion==''){
    header("Location:login.php");
  }
  if($sesion==1){
    $Numerocuenta = $arreglo['Numerocuenta'];
    $Nombre=$arreglo["Nombre"];
    $PrimerApellido=$arreglo["PrimerApellido"];
    $FN=$arreglo["FN"];
  }else{
    $Numerocuenta = $_COOKIE['Numerocuenta'];
    $Nombre = $_COOKIE['Nombre'];
    $PrimerApellido = $_COOKIE['PrimerApellido'];
    $SegundoApellido = $_COOKIE['SegundoApellido'];
    $Contraseña = $_COOKIE['Contraseña'];
    $Genero = $_COOKIE['Genero'];
    $FN = $_COOKIE['FN'];
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Informacion de Usuario</title>
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

    <div class="container-fluid" style="max-width: 700px">
      <h5>Usuario Autenticado</h5>
      <div class="card">
        <div class="card-header"><img src="https://i.pravatar.cc/128" class="img-thumbnail" style="width: 70px"><?php echo $Nombre." ".$PrimerApellido;?></div>
        <div class="card-body">
          <h5 class="card-title">Informacion</h5>
          <p class="card-text">
            Numero de cuenta: <?php echo $Numerocuenta?>
            <br>
            Fecha de nacimiento: <?php echo $FN?>
          </p>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Nacimiento</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $arreglo["Numerocuenta"]?></th>
            <td><?php echo $arreglo["Nombre"]." ".$arreglo["PrimerApellido"];?></td>
            <td><?php echo $arreglo["FN"]?></td>
          </tr>
          <tr>
            <?php
              if(isset($_COOKIE['Numerocuenta']) ){
                echo "<th>";
                echo $_COOKIE['Numerocuenta'];
                echo "</th>";
                echo "<td>";
                echo$_COOKIE['Nombre']." ".$_COOKIE['PrimerApellido'];
                echo"</td>";
                echo "<td>";
                echo $_COOKIE['FN'];
                echo "</td>";
              }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
