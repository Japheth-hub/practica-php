<?php
//Abrir archivo
$archivo = fopen("fichero_texto.txt", "r");//Permiso de solo lectura
//$archivo = fopen("fichero_texto.txt", "a+");//Permiso para escribir y leer



//Leer contenido solo lectura
while (!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido.'<br>';
}

//Para leer y escribir
//fwrite($archivo, 'Soy un texto agregado al archivo');
//Este texto se escribe tanto en el navegador como en el archivo txt

//Cerrar archivo
fclose($archivo);
//-----------------------------------------------------------------------------

//Es necesario actualizar en el navegador para ejecutar los cambios
//Para copiar un archivo =
copy('fichero_texto.txt', 'coipa_fichero') or die('Error al copiar');

//Para renombrar un archivo = 
rename('coipa_fichero', 'nombre_cambiado.txt');

//Para eleminar un archivo = 
unlink('nombre_cambiado.txt') or die('Error al borrar');

//Comprobar si existe un fichero(archivo) o no = 
if(file_exists('fichero_texto.txt')){
    echo '<h1>Si existe el archivo</h1>';
}


