<?php

class Coche{
    //Atributos o propiedades (variables)
    //PUBLICO : Podemos acceder desde cualquier lugar, dentro de la clase actual
    //dentro de las clases que hereden esta clase o fuera de la clase
    public $color;
    
    //Protected : Podemos acceder a ellos desde la clse que los define
    //y desde clases que hereden esta clase
    protected $marca;
    
    //PRIVATE : Unicamete se pueden acceder desde esta clase
    private $modelo;
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    //Constructor
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }


    //Metodos (funciones) Acciones que realiza el objeto
    public function getColor() {
      //Retorna en ESTA clases (->) la propiedad X
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getModelo() {
        $this->modelo;
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
    
    public function mostrarInfo(Coche $obj) {
        
        $info  = "<h1>Informacion del Coche</h1>";
        $info .= "Color : ".$obj->color;
        $info .= "<br>Modelo : ".$obj->modelo;
        $info .= "<br>Velocidad : ".$obj->velocidad;
        
        return $info;
    }
}//Fin definicion de la clase-----------------------------------










