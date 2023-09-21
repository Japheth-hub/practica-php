<?php 
include_once './includes/redireccionar.php'; 
include_once './includes/conexion.php';

 var_dump($_SESSION);
 var_dump($_GET);
 $id_borrar = $_GET['id'];
 $sql = "DELETE FROM entradas WHERE id=$id_borrar;";
 $eliminar = mysqli_query($db, $sql);

 $_SESSION['eliminado']="eliminado";
 header("Location: index.php");



