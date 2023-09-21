<?php require_once './includes/conexion.php';?>
<?php require_once './includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>BLOG DE VIDEOJUEGOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"> 
    </head>
    <body>
        <!-- CABCERA------------------------------------------------------ -->
        <header id="cabecera">
            <!--LOGO---------------------------------------------------------->            
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>            
            <!-- MENU------------------------------------------------------ -->            
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php?id=inicio">Inicio</a>
                    </li>
                    <?php 
                        $categorias=categorias($db);
                        if(!empty($categorias)):
                        while ($categoria = mysqli_fetch_assoc($categorias)):
                    ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?= $categoria['nombre'] ?></a>
                        </li>
                    <?php 
                    endwhile;
                    endif;?>
                    
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        
        <div id="contenedor">
