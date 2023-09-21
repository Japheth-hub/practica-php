<?php

/* 
 Crear dos variables (PAIS Y CONTINENTE)y mostrar su valor en pantalla,
  y luego poner en pantalla que tipo de dato tiene
 */

$pais = 'Mexico';
$continente = 'America';

echo $pais.' : <br>'
.gettype($pais).'<br>'
.var_dump($pais);
echo '<hr>';
echo $continente.' : <br>'
.gettype($continente).'<br>'
.var_dump($continente);

