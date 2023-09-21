<?php

if(isset($_POST)){
    
//Cargar la conexion a la base de datos
require_once 'includes/conexion.php';
//Iniciar session solo cuando no este iniciada
if(!isset($_SESSION)){
    session_start();
}

//Esta funcion se utilza para que php interprete todo lo que se le pase como uan string
//mysqli_real_escape_string($bd, $_POST['nombre']); Sirve para poder escapar carectres especiales
//y que nuestro codigo sea mas seguro

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    //$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
    
    //Array de errores
    $errores = array();
    
    //Validar los datos antes de guardarlos en la base de datos
    //Validar NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //Validar APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }
    //Validar EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
    //Validar PASSWORD
    if(!empty($password)){
        $password_validado = true;
    } else {
        $passwrod_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }
    //var_dump($errores);
    
    
    $guardar_ususario=false;
    //Verificar errores antes de guardar en base de datos
    if(count($errores) == 0){
        $guardar_usuario = true;
        //Cifrar la contraseña del usuario
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        //Esta funcion hace que la contraseña se encripte 4 veces(['cost'=>4])
        //var_dump($password);
        //var_dump($password_segura);
        //var_dump(password_verify($password, $password_segura));
//Esta funcion verifica si la contraseña normal es la misma que la encriptada, devuleve true o false
        
        //Insertar usuario en la tabal de la base de datos
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
//       var_dump($nombre);
//       die();
        
        if($guardar){
            $_SESSION['completado'] = 'El registro fue completado con exito';
        } else {
            $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
        }
        
        
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}
header('Location: index.php');

