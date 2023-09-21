<?php include_once './includes/redireccionar.php'; ?>
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Entradas</h1>
       
        <?php
//            var_dump($_SESSION); 
//            var_dump(entradas($db));
            $entradas = entradas($db);
            if(!empty($entradas)):
                while ($entrada = mysqli_fetch_assoc($entradas)):
                    if($entrada['id'] == $_GET['id']):
                        $titulo = $entrada['titulo'];
                        $descripcion = $entrada['descripcion'];
                        $category = $entrada['categoria_id'];   
//                        var_dump($entrada);
        ?>
        <article class="entradas">
            <h2>Titulo</h2>
            <p><?=$titulo?>"</p>            
            <br>
            <h2>Descripcion</h2>
            <p><?=$descripcion?></p> 
            <br>
            <h2>Categoria</h2>
            
                <?php 
                    $categorias=categorias($db);
                    if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                    if($categoria['id'] == $category):
                        $selected = $categoria['nombre'];
                ?>
                <p>
                    <?= $categoria['nombre'] ?>
                </p>
                
                <?php
                if($entrada['usuario_id'] == $_SESSION['usuario']['id']):
                ?>
                <a class="boton boton-verde" href="editar-entradas.php?id=<?=$entrada['id']?>">Editar Entrada</a>
                <a class="boton boton-rojo" href="eliminar-entrada.php?id=<?=$entrada['id']?>">Eliminar Entrada</a>
                
                <?php 
                    endif;
                    endif;
                    endwhile;
                    endif;
                ?>
        </article>
            <?php
                endif;
                endwhile;
                endif;
            ?>
        
       <?php unset($_SESSION['errores-entrada']);?>
    </div><!-- fin principal -->

    
    
<?php include_once './includes/footer.php'; ?>

