<?php

/* 
Crear un array que añada valores miengtras su longitud sea menor a 120 y luego
 mostrarlo en pantalla
*/

$arreglo = [];

for($i=0; $i<120; $i++){
    $numero = rand(1, 999);
    array_push($arreglo, $numero);
    echo $numero.'<br>';
}
//var_dump($arreglo);
