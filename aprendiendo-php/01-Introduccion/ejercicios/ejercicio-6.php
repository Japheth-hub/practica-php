<?php

/* 
 Imprimir por pantalla todas las tablas de multiplicar del 1 al 10 y mostrarlas
 en una tabla HTML
 */

echo '<table border="1"><tr>';
for($i=1; $i<=10; $i++){
echo    '<th>Tabla del : '.$i.'</th>';
}
echo '</tr>';
echo '<tr>';
for($i=1; $i<=10; $i++){
echo    '<td>';
        for($x=1; $x<=10; $x++){
            echo " $i x $x = ".$i*$x.'<br>';
        }
echo    '</td>';
}
echo '</tr>';
echo '</table>';
