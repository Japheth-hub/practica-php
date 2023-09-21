<?php
//Posobilidad de compartir atributos y metodos entre clases

class persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;


    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }
    
    public function hablar() {
        return 'Estoy hablando';
    }
    
    public function caminar(){
        return 'Estoy caminando';
    }    
}

//Extends sirve para heredar las propiedades(variables) de una clase
//En este case (persona) es de donde hereda las propiedades
class informatico extends persona{
    
    public $lenguajes;
    public $salario;
    
    public function __construct() {
        $this->lenguajes = 'HTML, JS, CSS, PHP';
        $this->salario = '$35,000';
    }


    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }

    public function programar() {
        return ' Soy programador';
    } 
    
    public function repararOrdenador(){
        return 'Se reparar el ordenador';
    }
    
    public function hacerOfimatica(){
        return 'Estoy escribiemndo en word';
    }
}

class tecnicoRedes extends informatico{
    
    public $auditarRedes;
    public $experiencia;

    
    public function __construct() {
        parent::__construct();
        $this->auditarRedes= 'SI';
        $this->experiencia = '10 años';
    }


    public function auditoia() {
        return 'Estoy auditando una red';
    }
}






