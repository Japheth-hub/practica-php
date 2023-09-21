<?php

//Crear un directorio
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}

//Borrar directorio
//rmdir('mi_carpeta');
echo '<hr>';
//Con esta funcion podemos mostrar el contenido de mi carpeta
echo '<h1>Contenido de la carpeta</h1>';
if($gestor = opendir('./mi_carpeta')){//Aqui abrimos la carpeta y se la asignamos a una variable
    while (false!==$archivo = readdir($gestor)){//Aquie entramos al bucle y al mismo tiempo
        //leemos el primer archivo del directorio 
        if($archivo != '.' && $archivo != '..'){//Aqui verificamos si el archivo que vamos a leer
            // es diferente a la carpeta actual(.) o a la carpeta padre(..)
            echo $archivo.'<br>';
        }
    }
}
