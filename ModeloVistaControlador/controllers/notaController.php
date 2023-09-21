<?php

class NotaController{
    
    public function listar(){
        require_once 'models/nota.php';
        
        $nota = new Nota();
        $nota->nombre = 'Primer nota';
        $nota->contenido = 'Hola mundo desde php MVC '; 
        
        $notas = $nota->conseguirTodos('notas');
        
        require_once 'views/notas/listar.php';
    }
    
    public function crear(){
        require_once 'models/nota.php';
        
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Notas desde PHP MVC');
        $nota->setDescripcion('Esta nota proviene del MVC');
        $nota->guardar();
        //echo $nota->db->error;
        
        require_once 'views/notas/crear.php';
        
    }
    
    public function borrar(){
        
    }


}

