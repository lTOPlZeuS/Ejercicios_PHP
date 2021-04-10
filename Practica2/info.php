<?php
session_start();
$varsesion = $_SESSION['Alumno'];
$user=$_SESSION['admin'];
if($varsesion == null || $varsesion = '')
{
  header("Location:login.php");
  die();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Informacion de Usuario</title>
  <link rel="stylesheet" href="css/master.css" />
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="info.php">Inicio <span class="sr-only">(current)</span></a>
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
      <div class="card-header"><img src="https://i.pravatar.cc/128" class="img-thumbnail" style="width: 70px">
        <?php
        echo $_SESSION['Alumno'][$user]['Nombre']." ".$_SESSION['Alumno'][$user]['PrimerApellido'];
        echo "</div>";
        echo "<div class=card-body>";
        echo  "<h5 class=card-title>Informacion</h5>";
        echo  "<p class=card-text>";
        echo   "Numero de cuenta: ";
        echo   $_SESSION['Alumno'][$user]['Numerocuenta'];
        echo    "<br>";
        echo    "Fecha de nacimiento: ";
        echo    $_SESSION['Alumno'][$user]['FN'] ;
            ?>
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
        <?php
        foreach($_SESSION['Alumno'] as $alumno)
        { ?>
        <tr>
          <td><?php echo $alumno['Numerocuenta']; ?></td>
          <td><?php echo $alumno['Nombre']." ".$alumno['PrimerApellido']; ?></td>
          <td><?php echo $alumno['FN']; ?></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>