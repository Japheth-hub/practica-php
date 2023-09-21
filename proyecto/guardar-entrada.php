<?php

//var_dump($_POST);
if(isset($_POST)){
    //conexion a la  base de datos
    require_once 'includes/conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false; 
    $usuario = (int)$_SESSION['usuario']['id'];
    
    //Validacion
    $errores = array();
    
    if(empty($titulo)){
        $errores['titulo'] = 'Titulo no es valido';
    }
     if(empty($descripcion)){
        $errores['descripcion'] = 'La descripcion no es valida';
    }
     if(empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = 'Categoria no es valido';
    }
    
    //    var_dump($usuario);
    //    var_dump($categoria);
    //    var_dump($titulo);
    //    var_dump($descripcion);
    //    var_dump($errores);
    if(count($errores) == 0){
        $sql = "INSERT INTO entradas VALUES (null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        $guardar_entrada = mysqli_query($db, $sql);
        $_SESSION['entrada-creada'] = 'Entrada creada con exito';
        header('Location: index.php');
        
    } else {
        $_SESSION['errores-entrada'] = $errores;
        header('LOCATION: crear-entradas.php');
    }
    
}



