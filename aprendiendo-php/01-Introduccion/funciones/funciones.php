<?php

//Funcion
function tabla ($numero){
    echo '<table><tr>';
    echo "<th>Tabla del $numero</th>";
    echo '</tr>';
    echo '<tr><td>';
        for($i=1; $i<=10; $i++){
            $result = $i*$numero;
            echo " $i x $numero = $result<br>";
        }
    echo '</td></tr></table>';
}
tabla(1);
echo '<hr>';


//Funcion de varios parametros
function calculadora($num1, $num2, $negrita = false){
    //Aqui estamos ocupamndo un parametro opcional con un valor por default
    if($negrita){
        echo '<h1>';
    }
    echo "La suma de $num1 y $num2 es igual a : ".$num1+$num2.'<br>';
    echo "La resta de $num1 y $num2 es igual a : ".$num1-$num2.'<br>';
    echo "La multiplicacion de $num1 y $num2 es igual a : ".$num1*$num2.'<br>';
    echo "La divicion de $num1 y $num2 es igual a : ".$num1/$num2.'<br>';
    echo '<hr>';
    if($negrita){
        echo '</h1>';
    }
}
//En una llamada a la funcio no colocamos el tercer parametro porque ya viene 
//por default, pero en la segunda si porque queremos darle un nuevo valor
calculadora(10,2);
calculadora(15, 3, true);


//Lo ideal seria que una funcion siempre devuelva algo por medio del (Return)
function nombre($nombre){
    return 'Mi nombre es : '.$nombre
    .'<h1>Hola mundo</h1>';
}
echo nombre('Angel Japheth');


//Funciones dentro de otras funciones
function getnombre($nombres){
    $texto = "Mi Nombre es $nombres";
    return $texto;
}

function getapellido($apellidos){
    $texto = "Mi Nombre es $apellidos";
    return $texto;
}

function usuario($nombres, $apellidos){
    $result = getnombre($nombres)
        . '<br>'
            .getapellido($apellidos);
    return $result;
}
echo usuario('Angel', 'Ramirez');