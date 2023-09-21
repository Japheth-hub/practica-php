<?php 
require_once 'coche.php';

$coche = new Coche('Amarillo', 'Seat', 'Ibiza', 255, 400, 1);
$coche1 = new Coche('Rojo', 'Toyota', 'Corolla', 300, 550, 3);
$coche2 = new Coche('Azul', 'Nissan', 'Platina', 150, 200, 5);
$coche3 = new Coche('Negro', 'Mazad', 'CX-50', 280, 600, 2);



//Accedemos facilmente y cambiamos el valor de la propiedad color
$coche1->color = 'Rojo';//Propiedad Public

//Accedemos a su valor mediante un metodo(funcion) para que se pueda realizar el cambio
$coche1->setMarca('Audi');//Propiedad Protected

//Accedemos de igual manero solo mediante un metodo(funcion) set para cambiar o get para obtener
$coche1->getModelo();
var_dump($coche1);

echo $coche->mostrarInfo($coche2);




