<?php
if(isset($_POST['submit']))
{
  $numAdmin='1';
  $passAdmin='adminpass123';
  $numcuenta=$_POST['numcuenta'];
  $pass=$_POST['pass'];
  session_start();
  if (($_POST['numcuenta']==$numAdmin && $_POST['pass']==$passAdmin) || (isset($_SESSION['Alumno'][$numcuenta]) && $_SESSION['Alumno'][$numcuenta]['Contraseña']==$pass))
  {
    if ($_POST['numcuenta']==$numAdmin && $_POST['pass']==$passAdmin)
    {
      $_SESSION['Alumno'] = [
      1=>[
        'Numerocuenta'=> '1',
        'Nombre' => 'Admin',
        'PrimerApellido' => 'General',
        'SegundoApellido' =>'',
        'Contraseña' => 'adminpass123.',
        'Género' => 'Otro',
        'FN'=> '28/09/1994'
      ]
      ];
      //Admin
      $_SESSION['admin']=$numAdmin;
      header("Location:info.php");
    }
    else
    {
      //Invitado
      $_SESSION['admin']=$numcuenta;
      header("Location:info.php");
    }
  }
  else
  {
    echo'<script type="text/javascript">alert("Numero de cuenta o contraseña incorrecta intente de nuevo");window.location.href="login.php";</script>';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link rel="stylesheet" href="css/master.css" />
</head>

<body>
  <div class="login-box">
    <h1>Login</h1>
    <form class="col-12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
      <label for="username">Numero de cuenta</label>
      <input type="text" name="numcuenta" />
      <label for="password">Contraseña</label>
      <input type="password" name="pass" />
      <input type="submit" name="submit" value="Entrar" />
    </form>
  </div>
</body>

</html>