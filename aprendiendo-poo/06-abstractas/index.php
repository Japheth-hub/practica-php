<?php

abstract class ordenador{
    
    public $encendido;


    abstract public function encender();
    
    public function apagar() {
        $this->encendido = false;
    }
}

class pcdell extends ordenador{
    
    public $software;
    
    public function arrancar() {
        $this->software = true;
    }
    
    public function encender() {
        $this->encendido = true;
    }
    
}

$ordenador = new pcdell();
$ordenador->arrancar();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);






