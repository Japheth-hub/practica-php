<?php

class Usuario{
    
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = 'Angel Ramirez';
        $this->email = 'angel@correo.com';
        echo 'Creando del objeto creado<br>';
    }
    
    public function __toString() {
        return "Hola {$this->nombre}, tu email {$this->email} ha sido registrado<br>";
    }


    public function __destruct() {
        echo 'Destruyendo el objeto';
    }
}

$usuario = new Usuario;

echo $usuario;

for($i = 0; $i <= 50; $i++){
    echo $i.'<br>';
}
