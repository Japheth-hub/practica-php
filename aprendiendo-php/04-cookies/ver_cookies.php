<?php
//Para mostrar el valor de las cookies se utiliza $_COOKIE que es una variable 
//super globar que esta disponible en todos los archivos php y es un array asociativo

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
} else {
echo 'No existe ninguna cookie';
}

if(isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
} else {
    echo 'No existe la cookie';
}

?>
<a href="index.php">Crear cookies</a>
<a href="borrar_cookie.php">Borrar mi cookie</a>

