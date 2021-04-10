<?php
echo"<center>";
/*el operador de asignacion .= nos permite ir creciendo nuestra cadena */
$cadena=null;
for ($i=0; $i < 31; $i++) {
  echo"$cadena"."<br>";
  $cadena .= "*";
}

echo"<br>";
for($i=0; $i<15; $i++) {
  /*la funcion repeat repite nuestro primer parametro las veces que lo
  marque el segundo parametro es decir i que esta en el for lel cual va
  incrementando  para decidir las veces que se repite*/
  echo str_repeat(" * ", $i).'<br/>';
}

for($u=15,$i=0; $i<15;$i++,$u--) {
  echo str_repeat(" * ", $u).'<br/>';
}
?>