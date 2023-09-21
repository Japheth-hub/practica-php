<?php
require_once 'autoload.php';

$controlador = new UsuarioController();
$clase = isset($_GET['class']) ? $_GET['class'].'Controller' : '';

if(class_exists($clase)){
    
    $controlador = new $clase();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    $metodo = $_GET['action'];
   
    $controlador->$metodo();
    
    }else{
        echo '<h1>Metodo no existe</h1>';
    }
}else{
   echo '<h1>Clase no existe</h1>';
}

?>
