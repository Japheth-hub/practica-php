<?php
require_once 'modeloBase.php';
class Nota extends ModeloBase{
    
    public $usuario_id;
    public $titulo;
    public $descripcion;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario_id() {
        return $this->usuario_id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setUsuario_id($usuario_id): void {
        $this->usuario_id = $usuario_id;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }
    
    public function guardar() {
        $sql = "INSERT INTO notas(id, usuario_id, titulo, descripcion, fecha) VALUES (null, '{$this->usuario_id}', '{$this->titulo}', '{$this->descripcion}', CURDATE());";
        $guardar = $this->db->query($sql);
        return $guardar;
    }
    
    
}
