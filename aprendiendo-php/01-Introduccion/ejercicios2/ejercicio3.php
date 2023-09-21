<?php

/*
 Hacer un programa que compruebe si una variable esta vacia  y si esta vacia, 
 rellenarla con  texto en minusculas pero mostrar el textop en mayusculas y negrita 
*/
//empty significa que si esta vacio es true y si no es false
$texto ='';

if(empty($texto)){
    $texto = 'este es el nuevo valor';
    echo '<strong>'.strtoupper($texto).'</strong>';
} else {
    echo 'La variable si tiene valor';
}

