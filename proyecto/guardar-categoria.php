<?php


if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    
    //array de errores
    $errores =  array();
    
    //Validar los datios antes de gusradr en  la base de datos
    //Validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre) ){
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = 'nombre no valido o vacio';
    }
    
    $sql = "SELECT * FROM categorias WHERE nombre='$nombre'";
    $categoria_existente = mysqli_query($db, $sql);
    
    if(mysqli_num_rows($categoria_existente) >= 1){
        $errores['existente'] = 'Esta categoria ya existe';
    }
    
    if(count($errores)== 0){
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";
        $guardar_categoria = mysqli_query($db, $sql);
        $_SESSION['categoria-creada'] = 'Categoria creada con exito';
        header('LOCATION: index.php');
    }else{
        $_SESSION['errores-categoria'] = $errores;
        header('LOCATION: crear-categoria.php');
        
    }
}


