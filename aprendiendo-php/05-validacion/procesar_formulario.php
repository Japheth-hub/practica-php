<?php

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && 
        !empty($_POST['correo']) && !empty($_POST['contraseña'])){
 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];//En este caso estamos convirtiendo nuestro valor a entero(castear)
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    
    //Validacion con expresiones regulres en php-------------------------------
    if(is_string($nombre) || preg_match('/[A-Za-z ]+/', $nombre)){
        echo 'Nombre exitoso'.'<br>';
    }else{
        $error_nombre = 'error_nombre';
        header("Location:index.php?error=$error_nombre");
    }
    if(is_numeric($edad) && filter_var($edad, FILTER_VALIDATE_INT)){
        echo 'Edad exitosa';
    }
    
    var_dump($edad);    
} else {
    $error = 'faltan_valores';
    header("Location: index.php?error=$error");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Validacion del formulario en php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Nombre : <?=$nombre?></p>
        <p>Apellido : <?=$apellido?></p>
        <p>Edad : <?=$edad?></p>
        <p>Correo : <?=$correo?></p>
        <p>Contraseña : <?=$contraseña?></p>
    </body>
</html>
