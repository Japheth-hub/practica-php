<!DOCTYPE html>
<html>
    <head>
        <title>Subir archivos </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Subir Imagenes con php</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data"> 
            <input type="file" name="archivo"><br>
            <input type="submit" value="enviar"/>      
        </form>
        <h1>Listado de imagenes</h1>
        <?php
            $gestor = opendir('./images');
//Es buena practica utilizar (":" y "end(if, while, for)") para que podamos distinguir
//que estamos abriendo y cerrando cuando tengamos una secunecia larga de varios metodos
// y no confundirnos con las llaves "{}"
            if($gestor):
                while(false !== $image = readdir($gestor)):
                    if($image != '.' && $image != '..'):
                        echo "<img src='images/$image' width='200px' /><br>";
                    endif;
                endwhile;
            endif;
        
        ?>
    </body>
</html>
2