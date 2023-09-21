<?php
namespace MisClases;

class Categoria{
    
    public $nombre;
    public $descripcion;
    
    public function __construct() {
        $this->nombre = 'Deportes';
        $this->descripcion = 'Juegos de deportes';
    }
    
}
