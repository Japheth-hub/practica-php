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
    //array de datos que no se actualizan
    $datos_antes = array();
    //Datos de la actualizacion completa
    $actualizar = array();
    
    //Validar los datos antes de guardarlos en la base de datos
    //Validar NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    } elseif(empty ($nombre)) {
        $datos_antes['nombre'] = $_SESSION['usuario']['nombre'];    
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //Validar APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $nombre_validado = true;
    } elseif(empty ($apellidos)) {
        $datos_antes['apellidos'] = $_SESSION['usuario']['apellidos'];    
    }else{
        $nombre_validado = false;
        $errores['apellidos'] = "El apellido no es valido";
    }
    //Validar EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    } elseif(empty ($email)) {
        $datos_antes['email'] = $_SESSION['usuario']['email'];  
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
    //Validar PASSWORD
    if(!empty($password)){
        $password_validado = true;
    } elseif(empty ($password)) {
        $datos_antes['password'] = $_SESSION['usuario']['password'];  
    } else {
        $passwrod_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }
    
    $_SESSION['datos-antes'] = $datos_antes;
    //var_dump($errores);
    $actualizar['nombre'] = empty($nombre) ? $_SESSION['datos-antes']['nombre'] : $nombre;
    $actualizar['apellidos'] = empty($apellidos) ? $_SESSION['datos-antes']['apellidos'] : $apellidos;
    $actualizar['email'] = empty($email) ? $_SESSION['datos-antes']['email'] : $email;
    //$actualizar['password'] = empty($password) ? $_SESSION['datos-antes']['password'] : $password;
    $actualizar['fecha'] = $_SESSION['usuario']['fecha'];
    
    $_SESSION['actualizar'] = $actualizar;
    
    $a_nombre = $actualizar['nombre'];
    $a_apellidos = $actualizar['apellidos'];
    $a_email = $actualizar['email'];
    $id_actualizar = $_SESSION['usuario']['id'];
    
    $select = "SELECT * FROM usuarios WHERE id != $id_actualizar AND email = '$a_email';";
    $comprobar_email = mysqli_query($db, $select);
    $row = mysqli_fetch_assoc($comprobar_email);
    //var_dump($row);
    if($row){
        echo 'Correo ya existe';
        $errores['correo-existente'] = 'Este correo ya existe';
    }
//    var_dump($_SESSION);
//    die();
    
    
    $guardar_ususario=false;
    //Verificar errores antes de guardar en base de datos
    if(count($errores) == 0){
        $guardar_usuario = true;
        
        if(empty($password)){
            $sql = "UPDATE usuarios SET nombre='$a_nombre', apellidos='$a_apellidos', email='$a_email' WHERE id=$id_actualizar ;";
            $guardar = mysqli_query($db, $sql);
            
            //se actualiza todo menos la columna de password
            if($guardar){
                $_SESSION['actualizado_sin_passwrod'] = '<h3 class="alerta alerta-exito">La actualizacion fue completada con exito</h3>';
                 header('Location: index.php');
            } else {
                $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
            } 
        //Cifrar la contraseña del usuario
        }else{
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            //Esta funcion hace que la contraseña se encripte 4 veces(['cost'=>4])
            //var_dump($password);
            //var_dump($password_segura);
            //var_dump(password_verify($password, $password_segura));
            //Esta funcion verifica si la contraseña normal es la misma que la encriptada, devuleve true o false

            //Actualizar los datos del usuario
            $sql = "UPDATE usuarios SET nombre='$a_nombre', apellidos='$a_apellidos', email='$a_email', password='$password_segura' WHERE id=$id_actualizar ;";
            $guardar = mysqli_query($db, $sql);
            
            //var_dump(mysqli_error($db));
            //die();

            //var_dump($nombre);
            //header('Location: mis-datos.php');
            //die();

            if($guardar){
                $_SESSION['actualizado_con_password'] = '<h3 class="alerta alerta-exito">La actualizacion fue completada con exito</h3>'.
                '<h3 class="alerta alerta-exito">Debera iniciar sesion nuevamente</h3>';
                header('Location: index.php');
            } else {
                $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
            }  
            
        }
    } else {
    $_SESSION['error-actualizar'] = $errores;
    header('Location: mis-datos.php');
    }
}



