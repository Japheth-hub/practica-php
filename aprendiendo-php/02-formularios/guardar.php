<?php

if (isset($_GET['nombre'])){
    echo '<h3>Bienvenido </h3>'.$_GET['nombre'].'<br>';
} else {
    echo 'Regrese para colocar sui nombre';
} 

if (isset($_GET['password'])){
    $password = $_GET['password'];
    echo '<h3>Contraseña guardada </h3>*********<br>';
} else {
    echo 'No existe congtraseña';
} 

if (isset($_GET['correo'])){
    echo '<h3>Enviar mnotificacion a : </h3>'.$_GET['correo'].'<br>';
} else {
    echo 'Correo no existe';
} 

if (isset($_GET['pais'])){
    echo '<h3>Usted nos visita de :  </h3>'.$_GET['pais'].'<br>';
} else {
    echo 'Pias no existe : '.$_GET['pais'];
} 

if (isset($_GET['comentario'])){
    echo '<h3>Comentario y sugerencias </h3>';
    echo '<p>'.$_GET['comentario'].'</p><br>';
} else {
    echo '<p>Sin comentario</p><br>';
} 
