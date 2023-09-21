<?php

require_once 'autoload.php';
/*
$usuario = new Usuario();
echo $usuario->nombre;
echo '<br>';
echo $usuario->email;
echo '<hr>';
$categoria = new Categoria();
echo $categoria->nombre;
echo '<br>';
echo $categoria->descripcion;
echo '<hr>';
$entrada = new Entrada();
echo $entrada->titulo;
echo '<br>';
echo $entrada->fecha;
*/

//Espacios de nombre y paquetes

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use Admin\Usuario AS UsuarioAdmin;

 class Principal{
     
     public $usuario;
     public $categoria;
     public $entrada;
     
     public function __construct() {
         $this->usuario = new Usuario();
         $this->categoria = new Categoria();
         $this->entrada = new Entrada();
     }
     
     public function getUsuario() {
         return $this->usuario;
     }

     public function getCategoria() {
         return $this->categoria;
     }

     public function getEntrada() {
         return $this->entrada;
     }

     public function setUsuario($usuario): void {
         $this->usuario = $usuario;
     }

     public function setCategoria($categoria): void {
         $this->categoria = $categoria;
     }

     public function setEntrada($entrada): void {
         $this->entrada = $entrada;
     }
     function informacion(){
         echo __CLASS__;
     }

 }
 
 //Objeto de otro paquete (Admin)
 $principal = new Principal();
 var_dump($principal->usuario);
 //Podemos ver si nuestra clases tiene metodos(funciones) con esta funcion
 $metodos = get_class_methods($principal);
 var_dump($metodos);
 $busqueda = array_search('setCategoria', $metodos);
 var_dump($busqueda);
 $principal->informacion();
 
echo '<hr>';
 //Objeto Principal
 $usuario = new UsuarioAdmin();
 var_dump($usuario);
 
 
//Comprobar si existe una clase
 //El @ hace que me esconda los errores en el navegador
$clase = @class_exists('MisClases\Entrada');

if ($clase){
    echo 'exist yes';
} else {
    echo 'Not exist';
} 





