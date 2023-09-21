<?php

if(!isset($_SESSION)){
    session_start();
}

if(!$_SESSION['usuario']){
    $_SESSION['iniciar_sesion'] = "Debes iniciar sesion para poder acceder";
    header("Location: index.php");
}




