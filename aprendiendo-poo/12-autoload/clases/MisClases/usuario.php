<?php
namespace MisClases;

class Usuario{
    
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'Angel Ramirez';
        $this->email = 'angel@angel.com';
    }
    
}
