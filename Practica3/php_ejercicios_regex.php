<?php
//Realizar una expresión regular que detecte emails correctos.
$cadena1="jesus_reddead@hotmail.com";
$cadena1_1="jesus_reddead";
$result1=preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$cadena1);
$result1_1=preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$cadena1_1);
echo $cadena1." ".$result1;
echo "<br>";
echo $cadena1_1." ".$result1_1;
echo "<br>";

//Realizar una expresion regular que detecte Curps Correctos
//ABCD123456EFGHIJ78.
$cadena2="sasasasasa9921";
$cadena2_1="sasasasasa  9921";
$result2=preg_match('/^[a-zA-Z0-9]+$/',$cadena2);
$result2_1=preg_match('/^[a-zA-Z0-9]+$/',$cadena2_1);

echo $cadena2." ".$result2;
echo "<br>";
echo $cadena2_1." ".$result2_1;
echo "<br>";
//Realizar una expresion regular que detecte palabras de longitud mayor a 50
//formadas solo por letras.
$cadena3="juan jose";
$cadena3_1="juan josessssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss";
$result3=preg_match('/^[\s\S]{0,50}$/',$cadena3);
$result3_1=preg_match('/^[\s\S]{0,50}$/',$cadena3_1);
echo $cadena3." ".$result3;
echo "<br>";
echo $cadena3_1." ".$result3_1;
echo "<br>";
//Crea una funcion para escapar los simbolos especiales.
$cadena4 = "This is some <b>bold</b> text.";
echo htmlspecialchars($cadena4);
echo "<br>";
//Crear una expresion regular para detectar números decimales.
$cadena5="1.2";
$cadena5_1="1";
$result5=preg_match('/^[0-9]{1,3}?(.)?[0-9]{1,3}$/',$cadena5 );
$result5_1=preg_match('/^[0-9]{1,3}?(.)?[0-9]{1,3}$/',$cadena5_1 );

echo $cadena5." ".$result5;
echo "<br>";
echo $cadena5_1." ".$result5_1;
 ?>
