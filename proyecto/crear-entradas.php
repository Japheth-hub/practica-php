<?php include_once './includes/redireccionar.php'; ?>
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Crear Entradas </h1>
        <p>
            Añade nuevas entradas al blog para que los usuarios
            puedan leerlas
        </p>
        <br>
        <form action="guardar-entrada.php" method='POST'>
            <label for='titulo'>Titulo</label>
            <input type='text' name='titulo'>            
            <?= isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'titulo') : ''  ?>
        
            <label for='descripcion'>Descripcion</label>
            <textarea name='descripcion'></textarea> 
            <?= isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'descripcion') : ''  ?>
            
            <label for='categoria'>Selecciona la categoria</label>
            <select name='categoria'>
                <?php 
                    $categorias=categorias($db);
                    if(!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>
                    <option value='<?= $categoria['id'] ?>'>
                        <?= $categoria['nombre'] ?>
                    </option>
                <?php 
                    endwhile;
                    endif;
                ?>
            </select>
            
            <input type='submit' value='Guardar'>
        </form>
       <?php unset($_SESSION['errores-entrada']);?>
    </div><!-- fin principal -->

    
    
<?php include_once './includes/footer.php'; ?>
