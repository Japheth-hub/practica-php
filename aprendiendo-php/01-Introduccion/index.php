<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - MASTER EN PHP</title>
    </head>
    <body>
        <h1>MASTER EN PHP - Angel Ramirez</h1>
        <?='Bienvenido al curso de PHP'
        //Esta etiqueta sirve como atajo para imprimir
        /*Este es un comentario
        de tipo multilinea*/?>
        <?php
            echo '<h3>Lista de videojuegos: <h3/>';
            echo '<ul>'
                .'<li>Efootbal</li>'
                .'<li>Fifa</li>'
                .'<li>Pes</li>'
                .'<ul/>';
            echo '<hr>';
            //TIPOS DE VARIABLES
            $texto='Pesos';
            $numero=10.1;
            $booleano=true;
            $arreglo=[1, 2, 3, 4, 5, 6];
            $objeto = array(
                'Angel'=>array(
                    'apellido'=>'Ramirez',
                    'edad'=>25,
                    'pais'=>'Mexico Puebla'
                ),
                'Pequeña'=>array(
                    'apellido'=>'de Ramirez',
                    'edad'=>27,
                    'pais'=>'Mexico DF'
                )
            );
            //Asi podemos acceder a los datos de un objeto
            echo $objeto['Angel']['apellido'].'<br>';
            echo '<hr>';
            /*Tipos de datos
             Entero (int, integer)= 99
             Coma flotante o deciamles (float, double)= 3.14
             Cadenas('String')
             Boleanos(true o false)
             null
             Array = [1, 2, 3, 4, 5, 6]
             Objetos*/
            
            //Comos saber que tipo de variable tengo
            echo gettype($numero).'<br>';
            /*Esta funcion me da todos los detalles de mi variable
            desde DONDE SE ENCUENTRA EL ARCHIVO, EL TIPO, LOS DATOS
            Y HASTA LA LONGITUD EN CASO DE CONTENER STRINGS*/
            echo '<hr>';
            var_dump($texto);
            /*Aqui podemos ver que usando comillas dobles podemos usar
            variables y concatenarlas sin usar el punto, a diferencia 
            de las comillas simples que solo nos dejan escribir texto             */
            echo 'Variable $numero <br>';
            echo "Variable $numero".'<br>';
            echo '<hr>';
            //Asi es como declaramos una constante
            define('nombre', 'Angel Japheth');
            //Funcion('nombre de la constante', 'valor de la contsante');
            echo nombre.'<br>';//Para imprimir la contsante se omite el dolar($)
            //Constantes predefinidas echo php_()
            echo '<hr>';
            //Operadores aritmeticos
            $n1=10;
            $n2=2;
            echo 'suma :'.($n1 + $n2).'<br>';
            echo 'resta :'.($n1 - $n2).'<br>';
            echo 'multiplicacion :'.($n1 * $n2).'<br>';
            echo 'divicion :'.($n1 / $n2).'<br>';
            echo 'resto de una divicion: '.($n1%$n2).'<br>';
           //Operadores de invcremento y decremento
            $n1++;
            $n1--;
            //Operadores de asignacion
            /*
             = sirve para asignar
             += es iguial a variable = variable + numero
             -= es iguañ a variable = variable - numero
             */
            //Variable super globales
            //Vraiables de servidos
            echo $_SERVER['SERVER_ADDR'].'<br>';
            echo $_SERVER['SERVER_NAME'].'<br>';
            echo $_SERVER['SERVER_SOFTWARE'].'<br>';
            echo $_SERVER['HTTP_USER_AGENT'].'<br>';
            echo $_SERVER['REMOTE_ADDR'].'<br>';
            //Vraiables GET Y POST
            
            
            
        ?>
    </body>
</html>

