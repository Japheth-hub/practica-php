<?php

//Para utilizar una variable global dentro de una function tenemos que dar la 
//orden mediante la funcion (global $variable), como en este ejemplo
$frase = 'Dios ama al que da con alegria';
function frase(){
    global $frase;
echo $frase;
}
frase();
echo '<hr>';

//Funciones variables, en este ejemplo vemo como almacenar las funciones dentro
//de variables para poder ocuparlas mas tarde

function dias(){
    return 'hola buenos dias';
}

function tardes(){
    return 'que tal buenas tardes';
}

function noches (){
    return'buenas noches';
}

$accion = "tardes";
echo '<h1>'.$accion().'</h1>';
echo '<hr>';

//Funciones predefinidas
//Debuggear
$a='a';
var_dump($a);
//Fechas
echo date('d-m-y');
echo '<br>';
echo time();
echo '<br>';
//Matematicas
echo 'Raiz cuadrada de 10 = '.sqrt(10);
echo '<br>';

echo 'Numero aleatorio de entre 1 y 100 '.rand(1,100);
echo '<br>';

echo 'Numero PI '.pi();
echo '<br>';

//En este caso el segundo parametro nos permite decirle a la funcion cuantos 
//deciamles no estara redondeando 
echo 'Redondear el numero 9.7 a '.round(9.7777, 2);
echo '<br>';

//Mas funciones generales
echo gettype($a);
echo '<br>';

if(is_string($a)){//Sirve para ver si es un tipo de dato
    echo 'Esa variables es una string';
} else {
    echo 'Esa variable no es una string';
} 
echo '<br>';

echo isset($a);//Nos dice si la variable existe o no
echo '<br>';

$nombre = '   Angel   ';
echo trim($nombre);//Sirve para eliminar los espacios que existan al 
//principio y al final de una string
echo '<br>';

unset($nombre);//Sirve para eliminar una variable del codigo
var_dump($nombre);
echo '<br>';

$texto = "";
if(empty($texto)){//Sirve para comprobar si una variable esta vacia, si existe o no existe
    echo 'La variable esta vacia o no existe';
} else {
    echo 'La vaiable si existe';
}
echo '<br>';

//Nos devuelve la longitud de una string
$nombre = 'Angel Ramirez';
echo strlen($nombre);
echo '<br>';

//Encuentra un dato especifico de una string y nos dice en que indice esta
echo strpos($nombre, 'a');
echo '<br>';

//Remplazar palabras de una string
echo str_replace(' ', ' Japheth ', $nombre);
//Primer parametro es el "dato que queremos reemplazar"
//Segundo parametro es el "dato que vamos a colocar"
//Tercer parametro es la "variable en la que vamos a trabajar"
echo '<br>';

//Mayusculas y minusculas
$string = 'AnGel';
echo strtolower($string);
echo '<br>';
echo strtoupper($string);
echo '<br>';