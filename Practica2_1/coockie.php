<?php
$Numerocuenta = $_GET['Numerocuenta'];
$Nombre = $_GET['Nombre'];
$PrimerApellido = $_GET['PrimerApellido'];
$SegundoApellido = $_GET['SegundoApellido'];
$Contraseña = $_GET['Contraseña'];
$Genero = $_GET['Genero'];
$FN = $_GET['FN'];

setcookie('Numerocuenta',$Numerocuenta,time()+604800);
setcookie('Nombre',$Nombre,time()+604800);
setcookie('PrimerApellido',$PrimerApellido,time()+604800);
setcookie('SegundoApellido',$SegundoApellido,time()+604800);
setcookie('Contraseña',$Contraseña,time()+604800);
setcookie('Genero',$Genero,time()+604800);
setcookie('FN',$FN,time()+604800);

header("Location:info.php");
?>