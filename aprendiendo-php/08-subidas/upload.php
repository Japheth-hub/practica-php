<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/png' || $tipo == 'image/jpeg' || $tipo == 'image/git'){
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
//Esta funcion nos dice:  mover y guardar en un archivo(primer paramtero es 
//donde se encuentra el archivo, segundo parametro es en donde vamos a guardar 
//el aerchivo y con que nombre) 
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
//funcion a ejecutar($cual es el archivo a guardar, y en que carpeta/. y con que nombre se guardara)
     header('Refresh: 5; URL=index.php');
    echo '<h1>Imagen subida correctamnente</h1>';
}else{
    header('Refresh: 5; URL=index.php');//Con esta funcion podemos redireccionar al usuario a 
    //otra URL despues de los segundos que asignemos con Refresh
    echo 'Sube una imagen del siguiente tipo:';
}