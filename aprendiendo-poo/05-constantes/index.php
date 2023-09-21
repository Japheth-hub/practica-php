<?php

class usuario{
    
    const URL_COMPLETA='http://localhost';
    public $email;
    public $password;
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }    
}
//La propiedda estatica esta definida y no es necesario crear una instancia, es decir un nuevo obj;
echo usuario::URL_COMPLETA;

$usuario = new usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);

