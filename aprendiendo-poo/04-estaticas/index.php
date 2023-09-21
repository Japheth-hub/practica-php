<?php

require_once 'configuracion.php';

configuracion::setColor('green');
configuracion::setEntorno('localhost');
configuracion::setNewsletter(true);

echo configuracion::$color.'<br>';
echo configuracion::$entorno.'<br>';
echo configuracion::$newsletter.'<br>';













