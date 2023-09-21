<?php include_once './includes/redireccionar.php'; ?>
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Editar</h1>
        <p>
            Aqui podras editar o elimnar las entradas creadas por ti
        </p>
        <?php
//            var_dump($_SESSION); 
//            var_dump(entradas($db));
            $entradas = entradas($db);
            if(!empty($entradas)):
                while ($entrada = mysqli_fetch_assoc($entradas)):
                    if($entrada['id'] == $_GET['id']):
                        $titulo = $entrada['titulo'];
                        $descripcion = $entrada['descripcion'];
                        $categoria_id = $entrada['categoria_id'];   
//                        var_dump($entrada);
        ?>
        <br>
        <form action="actualizar-entrada.php?entrada_id=<?=$entrada['id']?>" method='POST'>
            <label for='titulo'>Titulo</label>
            <input type='text' name='titulo'value="<?=$titulo?>">            
           
            <label for='descripcion'>Descripcion</label>
            <textarea name='descripcion' rows="8" cols="100"><?=$descripcion?></textarea> 
            
            <label for='categoria'>Selecciona la categoria</label>
            <select name='categoria'>
                <?php 
                    $categorias=categorias($db);
                    if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                <option value='<?= $categoria['id'] ?>' <?= $categoria['id']==$entrada['categoria_id'] ? 'selected' : '' ?>>
                        <?= $categoria['nombre'] ?>
                    </option>
                    
                <?php 
                    endwhile;
                    endif;
                ?>
            </select>
           
            <?php
                
                endif;
                
                endwhile;
                endif;
            ?>
            <input type='submit' value='Actualizar'>
        </form>
       <?php unset($_SESSION['errores-entrada']);?>
    </div><!-- fin principal -->

    
    
<?php include_once './includes/footer.php'; ?>

