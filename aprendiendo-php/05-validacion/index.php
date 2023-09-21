<!DOCTYPE html>
<html>
    <head>
        <title>Validacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validacion del Formulario</h1>
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == 'error_nombre'){
                echo "<h1>El nombre no cumple la condicion</h1>";
            }elseif($_GET['error'] == 'faltan_valores'){
                echo "<h1>Los datos estan incompletos</h1>";
            }
        }
        ?>
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre : </label><br>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br>
            
            <label for="apellido">Apellido : </label><br>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z ]+"/><br>
            
            <label for="edad">Edad : </label><br>
            <input type="number" name="edad" required="required" pattern="[1-9]+"/><br>
            
            <label for="correo">Correo : </label><br>
            <input type="email" name="correo" required="required"/><br>
            
            <label for="contraseña">Contraseña : </label><br>
            <input type="password" name="contraseña" required="required"/><br>
            
            <input type="submit" value="enviar"/>
            
        </form>
    </body>
</html>


