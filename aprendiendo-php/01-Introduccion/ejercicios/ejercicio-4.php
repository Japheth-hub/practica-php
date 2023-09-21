<?php

/* 
Recojer 2 numero por la URL metodo GET y hacer todas las operacion de una 
 calculadora con esos dos numeros
 */
if(isset($_GET['num1']) && isset($_GET['num2'])){
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];

$suma = $n1+$n2;
$resta = $n1-$n2;
$multiplicacion = $n1*$n2;
$division = $n1/$n2;

echo "La suma es $suma <br>"
     ."La resta es $resta <br>"
     ."La multiplicacion es $multiplicacion <br>"
     ."La division es $division<br>";
}else{
    echo 'Ingrese los datos por la URL';
}
