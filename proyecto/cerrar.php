<?php
if(!isset($_SESSION)){
    session_start();
}


if($_SESSION['usuario']){
    session_unset();
    session_destroy();
    header('Location: index.php');
}

