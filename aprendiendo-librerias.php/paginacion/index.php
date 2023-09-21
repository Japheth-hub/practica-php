<?php
//Incluimos nuestro archivo que contien las diferentes librerias
require_once '../vendor/autoload.php';

//Conexion a la base de datos
$conexion = new mysqli('localhost', 'root', '', 'notas_master');
$conexion->query("SET NAMES 'utf8'");

//Ejecutamos la consulta mysql
$consulta =$conexion->query('SELECT * FROM notas');
$numero_elementos = $consulta->num_rows;
$elementos_por_pagina = 2;
//var_dump($numero_elementos);

//Hacer paginacion
$pagination = new Zebra_Pagination();

//Numero total de elemntos paginar
$pagination->records($numero_elementos);

//Numero de elemntos por pagina
$pagination->records_per_page($elementos_por_pagina);

$page = $pagination->get_page();
//var_dump($page);
$offset = ($page-1)*$elementos_por_pagina;
//var_dump($offset);
$notas = $conexion->query("SELECT * FROM notas LIMIT $offset,$elementos_por_pagina;");

while ($nota = $notas->fetch_object()){
    echo "<h1>$nota->titulo</h1>";
    echo "<h3>$nota->descripcion</h3><hr>";
}

$pagination->render();


