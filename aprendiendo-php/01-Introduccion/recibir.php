<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - MASTER EN PHP</title>
    </head>
    <body>
        
    </body>
</html>




<?php

//Este metodo sirve para recibit el valor de nuestra entrada en el formulario
echo '<h1>'.$_GET['nombre'].'<h1>';
echo '<h1>'.$_GET['apellido'].'<h1>';
/*Pasa los mismo si lo hacemos con POST
echo '<h1>'.$_POST['nombre'].'<h1>';
echo '<h1>'.$_POST['apellido'].'<h1>';
*/

$num=$_GET['edad'];
if ($num >= 18) {
    echo '<h1>Es mayor de edad</h1>';
} else {
    echo '<h1>Es menor de edad</h1>';
}