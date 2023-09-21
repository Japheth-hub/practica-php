<?php
if(isset($_GET)){
    
    //Cargar la conexion a la base de datos
    require_once 'includes/conexion.php';
    //Iniciar session solo cuando no este iniciada
    if(!isset($_SESSION)){
        session_start();
    }
    $id_categoria = $_GET['id'];
    $_SESSION['categoria_id'] = $id_categoria;
    
    header('Location: index.php');
}
