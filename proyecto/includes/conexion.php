<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_master';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAME 'utf8'");

//iniciar la sesion
if(!isset($_SESSION)){
    session_start();
}