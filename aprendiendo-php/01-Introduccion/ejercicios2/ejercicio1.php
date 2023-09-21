<?php

/* 
  crear un array de 8 numeros
 * Recorrer y mostrar un array
 * Ordenarlo y mostrarlo
 * Mostrar su longitud
 * Buscar un elemnto dentro del array
 */

function recorrer($arreglo){
    $resultado = "";
    for($i=0; $i< count($arreglo); $i++){
    $resultado.=' Numero : '.$arreglo[$i].'<br>';
    }
    return $resultado;
}

$arreglo = [7, 3, 8, 1, 5, 2, 4, 9];
echo recorrer($arreglo);
echo '<hr>';//---------------------------------------------------------------

sort($arreglo);
echo recorrer($arreglo);
echo '<hr>';//---------------------------------------------------------------

echo 'Su longitud del array es : '.count($arreglo);
echo '<hr>';//---------------------------------------------------------------

$numero = rand(1, 10);
echo 'Buscar el numero : '.$numero.'<br>';
$buscar = array_search($numero, $arreglo);
if($buscar){
    echo "El numero $numero si existe dentro de nuestro array<br>";
    echo "Es ta en el indice numero : $buscar";
} else {
    echo "El numero $numero no existe dentro de nuestro array";
}