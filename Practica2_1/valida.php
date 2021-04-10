<?php
require('cuentas.php');
$numcuenta = $_GET['numcuenta'];
$password = $_GET['password'];
if( isset($_COOKIE['Numerocuenta']) ){
  $Numerocuentac = $_COOKIE['Numerocuenta'];
  $Contraseñac = $_COOKIE['Contraseña'];
  if(($numcuenta == $Numerocuentac) AND ($password == $Contraseñac)){
  SESSION_START();
  $_SESSION['id']=$Numerocuentac;
  header("Location:info.php");
}
}
if (($numcuenta == $arreglo['Numerocuenta']) AND ($password == $arreglo['Contraseña'])) {
  SESSION_START();
  $_SESSION['id']=$arreglo['Numerocuenta'];
  header("Location:info.php");
}
 else {
  echo "¡Usuario o contraseña incorrectos!";
  echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
}
?>