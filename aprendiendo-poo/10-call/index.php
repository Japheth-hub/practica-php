<?php

class Persona{
    
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefijo_metodo = substr($name, 0, 3);
        
        if($prefijo_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3);
            if(!isset($this->$nombre_metodo)){
                return 'El metodo no existe';
            }
            //$this->$name
            return $this->$nombre_metodo;
        }
        return$nombre_metodo;
    }
    
}

$persona = new Persona('Angel', 25, 'Tehuacan');
echo $persona->getNombre();
echo $persona->getCiudad();
echo $persona->getEdad();
echo $persona->getHola();

var_dump($persona);

