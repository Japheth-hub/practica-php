<?php
require_once 'modeloBase.php';
class Usuario extends ModeloBase{
    
    public $nombre;
    public $apellidos;
    public $email;
    public $password;
    
     public function __construct() {
        parent::__construct();
    }
    
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }
    
    
    public function crear(){
        require_once 'crearUsuarios.php';
    }
    
}
