<?php

$juegos = array(
    'Accion'=>['GTA', 'COD', 'APEX'],
    'Aventura'=>['CRASH', 'LEGO','BOOM BEACH', 'DRAGON BALL Z', 'TEKKEN'],
    'Deportes'=>['FIFA 2023', 'EFOOTBALL 2023', 'F1 2023', 'MOTO GP 2023'],
    'Mesa'=>['MONOPOLY', 'RISK', 'TURITA MUNDIAL']
    );
    $categorias= array_keys($juegos);//la funcion (array_keys()) nos sirve
    //para sacra los indices de un arreglo asosiativo para poder iterar emn ellos
echo '<table border="1"><tr>';
foreach ($categorias as $categoria){
            echo  '<th>'
                .$categoria
              . '</th>';
}
              echo '</tr>'
              . '<tr>';
