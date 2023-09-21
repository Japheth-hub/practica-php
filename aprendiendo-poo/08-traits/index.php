<?php

trait Utilidades{
    public function mostrarNombre(){
        echo '<h1>El nombre es : '.$this->nombre.'<h1/>';
    }
}

class Coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class Videojuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videojuego = new Videojuego();
$coche->nombre = 'Mazda 3';
$coche->mostrarNombre();
$persona->nombre = 'Japheth';
$videojuego->nombre = 'Efootball';
$persona->mostrarNombre();
$videojuego->mostrarNombre();
var_dump($coche);