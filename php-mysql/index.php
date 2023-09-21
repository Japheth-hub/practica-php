<?php
//Conectar base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
//Parametros : servidor, usuario, contraseña, base de datos

//Comparar si la conexion es correcta
if(mysqli_connect_errno()){
    echo 'La base de datos ha fallado'.mysqli_connect_error();
}else{
    echo 'conexion exitosa<br>';
}


//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAME 'utf8'");


//Consulta SELECT
$select = mysqli_query($conexion, "SELECT * FROM notas");
//PARAMETROS: conexxion a la base de datos, query
//var_dump($select)
while ($row = mysqli_fetch_assoc($select)) {
    //var_dump($row);
    echo $row['descripcion'].'<br>';
}

//INSERT desde php

$query = "INSERT INTO notas VALUES (null, 'Nueva nota', 'Insertando datos de la base de datos', 'yellow')";
$insert = mysqli_query($conexion, $query);

if($insert){
    echo 'Insert exitoso<br>';
} else {
    echo 'error: '.mysqli_error($conexion);
} 

