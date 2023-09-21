<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Imprimir por pantalla - MASTER EN PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="GET" action="condicionales.php">
        <!-- Puedes cambiar el action para poder mandar los datos aqui mismo -->
        <!-- usamos el method para enviar los datos del formulario (GET, POST)
        y con action decimos a donde queremos que se envien los datos-->    
            <p>
                <label name="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label name="apellido">Apellido</label>
                <input type="text" name="apellido">
            </p>
            <p>
                <label name="edad">Edad</label>
                <input type="number" name="edad">
            </p>
           
                <input type="submit" value="enviar">
        </form>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EDAD</th>
            </tr>
            <tr>
                <?php
                $nombre = $_GET['nombre'];
                $apellido = $_GET['apellido'];
                $edad = $_GET['edad'];

                if($nombre == '' ){
                    echo 'Por favor escribe tu nombre';
                    echo '<td></td>';
                }else{
                    echo'<td>'.$nombre.'</td>';
                };
                if($apellido == ''){
                    echo 'Por favor escribe tu Apellido';
                    echo '<td></td>';
                }else{
                    echo '<td>'.$apellido.'</td>';
                };
                if($edad == '' || $edad == 0){
                    echo 'Por favor ingresa tu edad';
                    echo '<td></td>';
                }else{
                    echo '<td>'.$edad.'</td>';
                }
                ?>
            </tr>
        </table>
        
    </body>
</html>

