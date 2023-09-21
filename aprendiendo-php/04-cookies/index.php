<?php

/* 
Cookie: Es un fichero que se almacena en el ordenador del usuario que vista la web con
  el fin de recordar datos o rastrear cierta informacion o comportamientio de
  el mismo en la web
 */
//Estructura de una cookie
//setcookie("Nombre", 'Valor solo puede ser texto', caducidad, ruta, dominio);

//Crear cookie
setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion de 1 año
setcookie("unyear", "Valor de mi cookie de 365", time()+(60*60*24*365));

header('Location:ver_cookies.php');




