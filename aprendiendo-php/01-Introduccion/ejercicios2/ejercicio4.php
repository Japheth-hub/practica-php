<?php

/* 
Crear un scrip que tenga 4 variables (1 array, 1 string, 1 int, 1 booleano) y 
que imprima un mensaje segun el tipo de variable que sea
 */

$arreglo = [1,['angel', 'japheth', 'ramirez'], 'palabras', 100, true];

foreach ($arreglo as $dato) {
    if(is_array($dato)){
        echo 'Esto es un ARRAY<br>';
    } else if(is_string($dato)){
        echo 'Esto es una STRING<br>';
    } else if(is_int($dato)){
        echo 'Esto es un NUMERO<br>';
    } else if(is_bool($dato)){
        echo 'Esto es una variable BOOLEANA<br>';
    }
}