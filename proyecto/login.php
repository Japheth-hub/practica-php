<?php

//Cargar la conexion a la base de datos
require_once 'includes/conexion.php';
//Iniciar session solo cuando no este iniciada
if(!isset($_SESSION)){
    session_start();
}

//Si existen datos en POST se ejecuta
if(isset($_POST)){
    
 
    //Recoger los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];
            
    //Consulta para comporbra las credenciales del usuraio
    $sql = "SELECT * FROM usuarios WHERE email='$email'";//Creamos la query
    $login = mysqli_query($db, $sql);//hacemos la consulta
    
    if($login && mysqli_num_rows($login) == 1){//si la consulta da true y es solo una fila, entonces
        $usuario = mysqli_fetch_assoc($login);//creamos un array asociativo, usuario contendra los datos de la fila
        //comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);
        if($verify || $password == $usuario['password']){
            //utilizar una session para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario; 
            $_SESSION['contraseña-encriptada']=$verify;
            
            //echo 'Ingresaste correctamenmte';
             
        }else{
            //Si algo falla enviar una session con el fallo y redirigir al index
            $_SESSION['error_login'] = 'Login incorrecto';
         
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = 'Login incorrecto';
        
    }
    
}
header('Location: index.php');








