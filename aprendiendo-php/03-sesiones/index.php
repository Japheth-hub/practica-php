<?php

/* 
 Una Sesion: almacenar y persisitir datos del usuario mientras navega en un sitio
 web hasta que cierra secion  o cierra el navegador
 */
/*
Nos permite poder utilizar nuestras variables en todo nuestro dominio, con la
 funcion session_start(); iniciamos nuestra sesion y declaramos las variables
 medianto la funcion $_SESSION['nombre_variable']; y estas variables las podemos
 usar en toda nuestra pagina web, las varibles seguiran eactivas aunque
 cabiemos de pagina o estemos navehgando por distintos sitios de nuestro dominio
 */
//Iniciar la sesion
session_start();

$variable_normal = "Hola Mundo";

$_SESSION['variable_persistente']="Sesion Activa";

echo $variable_normal,'<br>';
echo $_SESSION['variable_persistente'];

