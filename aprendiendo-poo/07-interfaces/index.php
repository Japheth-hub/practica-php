<?php

interface ordenador{

    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
    
}

class iMac implements ordenador {
    
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function encender() {
        
    }
    public function apagar() {
        
    }
    public function reiniciar() {
        
    }
    public function desfragmentar() {
        
    }
    public function detectarUSB() {
        
    }
    
}

$equipo = new iMac;
$equipo->setModelo('Mackbook Pro 2024');
echo $equipo->getModelo();
var_dump($equipo);
