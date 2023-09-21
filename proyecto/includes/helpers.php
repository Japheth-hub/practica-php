<?php
//---------------------------------------------------------------------------
function mostrarError ($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty(($campo))){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alerta;
}
//---------------------------------------------------------------------------
function borrarErrores (){
    
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    if(isset($_SESSION['errores-entrada'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores-entrada']);
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
    if(isset($_SESSION['error_login'])){
        $_SESSION['error_login'] = null;
        unset($_SESSION['error_login']);
    }
}
//---------------------------------------------------------------------------
function categorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);
    
    $result = array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result = $categorias;
    }
    return $result;
}
//_-----------------------------------------------------------------------------
function entradas ($conexion){
    $sql = "SELECT e.*, c.nombre AS categoria FROM entradas e INNER JOIN categorias c ON e.categoria_id=c.id ORDER BY e.id DESC;";
    $entradas = mysqli_query($conexion, $sql);
    
    $result = array();
    if($entradas && mysqli_num_rows($entradas)>=1){
        $result = $entradas;
    }
    return $result;
}

function buscar ($conexion, $texto){
    $sql = "SELECT e.*, CONCAT(u.nombre,' ', u.apellidos) AS nombre, c.nombre AS categoria "
            ."FROM entradas e "
            ."INNER JOIN usuarios u ON e.usuario_id=u.id "
            ."INNER JOIN categorias c ON e.categoria_id=c.id "
            ."WHERE e.titulo LIKE '%$texto%' OR e.descripcion LIKE '%$texto%' "
            ."OR u.nombre LIKE '%$texto%' OR u.apellidos LIKE '%$texto%';";
    $buscar = mysqli_query($conexion, $sql);
    
    $result = array();
    if($buscar && mysqli_num_rows($buscar)>=1){
        $result = $buscar;
    }
    return $result;
}






