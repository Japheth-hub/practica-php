<?php

//Creando un objeto en php tambien se le llama array asociativo

$usuario = array(
    'nombre' => 'Angel',
    'apellido' => 'Ramirez',
    'pais' => 'Mexico'
);
echo $usuario['nombre'];



//Hay dos formas de crear arrays

$colores = array('Verde', 'Rojo', 'Azul');
$paises = ['Mexico', 'Argentina', 'Canada'];

//Recorrer con for
for($i=0; $i< count($colores); $i++){
    echo '<li>'.$colores[$i].'</li>';
}
echo '<hr>';
//Recorrer con foreach
foreach ($paises as $pais ){
    echo '<li>'.$pais.'</li>';
}

//Arrays multidimensional

$mochila = [['Libreta', 'Libro'], ['lapiz', 'colores', 'regla'], 'lapicera'];
var_dump($mochila);
echo $mochila[0][0];
echo '<hr>';


//Funciones con array
$cantantes = ['Luis Miguel', 'Jose Jose', 'Shakira'];
//En este ejemplo vemos que la funcion (asort($array)), nos puede ordenar 
//nuestro array alfabeticamente
asort($cantantes);
foreach ($cantantes as $cantante){
    echo $cantante.'<br>';
}
echo'<hr>';
//Y si usamos (arsort($array)) nos ordena nuestro array alfabeticamente al reves
arsort($cantantes);
var_dump($cantantes);
echo'<hr>';

//sort($array) nos sirve para ordenar tanto alfabeticamente como numericamente
//rsort($array) nos sirve para ordenar al reve nuestro array

$edades = [25, 27, 10, 12, 5, 37, 1];
sort($edades);
var_dump($edades);
echo'<hr>';

/*Algo importante es que (asort($array)), nos ordena los elementos sin alterar
 el indice en el que se encuentran los elemntos
 A diferencia de (sort($array)) nos ordena los elementos asignandoles su indice
 segun su posicion
 */

//Añadiendo elementos a nuestro array
$cantantes[1] = 'Maluma';//Añadimos un nuevo elemento al indice que elijamos
array_push($cantantes, 'Juan Gabriel');//Añadimos un nuevo elemnto al final
array_unshift($cantantes, 'Roberto');//Añadimos un elemnto al prinicipoi
array_pop($cantantes);//Eliminamos el ultimo elemnto del array
array_shift($cantantes);//Eliminamos el primer elemento del array
unset($cantantes[2]);//Eliminamos el elemento del inidce seleccionado
$cantantes[2] = 'Angel';//Cmabiamos un elemnto por otro
var_dump($cantantes);

echo $cantantes[array_rand($cantantes)];//Selecciona un elemnto aleatorio del array
var_dump(array_reverse($cantantes));//Reversa del array

//Buscar en un array un elemnto
echo array_search('Angel', $cantantes);//Nos da el indice de donde se encuentra
//el elemnto que buscamos en caso de que si exista
echo count($cantantes);// nos cuanta el numero de caracteres de nuestro array
echo '<br>';
echo sizeof($cantantes);//Nos cuenta cuantos elemtnos tiene nuestro array










