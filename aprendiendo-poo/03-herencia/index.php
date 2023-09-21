<?php
require_once 'clases.php';

$persona = new persona();
$persona->nombre = 'Angel';
var_dump($persona);

$informatico = new informatico();

var_dump($informatico);

$tecnico = new tecnicoRedes();
$tecnico->nombre = 'Japheth Ramirez';

var_dump($tecnico);