<?php
//Programacio programada a objetos POO en php

//Definir una clase(molde para crear mas objetos del mismo tipo con caracteristicas parecidas)

class Coche{
    //Atributos o propiedades (variables)
    public $color = 'rojo';
    public $marca = 'Mazda';
    public $modelo = 'Mazda 3';
    public $velocidad = 200;
    public $caballaje = 500;
    public $plazas = 3;
    
    //Metodos (funciones) Acciones que realiza el objeto
    public function getColor() {
      //Retorna en ESTA clases (->) la propiedad X
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }


    public function acelerar() {
        $this->velocidad++;
    }
    
    public function frenar() {
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
}//Fin definicion de la clase-----------------------------------

//Crear un objeto o instanciar la clase

$coche = new Coche();
var_dump($coche);

//Usar un metodo o usar los metodos

$coche->setColor('Azul');
echo '<p>El color del coche es : '.$coche->getColor().'</p><br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo '<p>La velocidad se elevo a : '.$coche->getVelocidad().' </p><br>';

$coche->frenar();
echo '<p>La velocidad bajo a : '.$coche->getVelocidad().' </p><br>';
var_dump($coche);

$coche2 = new Coche();
$coche2->setModelo('CX-50');
$coche2->setColor('Negro');
var_dump($coche2);






