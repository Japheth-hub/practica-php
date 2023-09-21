<?php

/* 
 Crear una calculadora con 2 entradas y 4 botones para las operaciones
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <label for="n1">Numero 1</label>
            <input type="number" name="n1" />
            <label for="n2">Numero 2</label>
            <input type="number" name="n2" />
            
            <input type="submit" value="sumar" name="sumar"/>
            <input type="submit" value="restar" name="restar"/>
            <input type="submit" value="multiplicar" name="multiplicar"/>
            <input type="submit" value="dividir" name="dividir"/>
        </form>
        <?php
        $numero1 = $_POST['n1'] ?? '';
        $numero2 = $_POST['n2'] ?? '';
        //$numero1 = intval($numero1);
        //$numero2 = intval($numero2);

        if(isset($_POST['sumar']) == 'sumar'){
            $suma = $numero1+$numero2;
            echo "La suma de $numero1 + $numero2 es igual a = $suma ";
        } elseif(isset ($_POST['restar']) == 'restar'){
            $resta = $numero1-$numero2;
            echo "La resta de $numero1 - $numero2 es igual a = $resta ";            
        } elseif(isset ($_POST['multiplicar']) == 'multiplicar'){
            $multiplicar = $numero1*$numero2;
            echo "La multiplicacion de $numero1 x $numero2 es igual a = $multiplicar ";
        } elseif(isset ($_POST['dividir']) == 'dividir'){
            $division = $numero1/$numero2;
            echo "La divicion de $numero1 / $numero2 es igual a = $division ";    
        }
        
        
        
        ?>
    </body>
</html>
