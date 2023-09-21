<?php include_once './includes/redireccionar.php'; ?>
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>


<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Crear Categorias</h1>
        <p>
            Añade nuevas categroias al blog para que mas usuarios puedan
            usarlas al crear sus entradas
        </p>
        <br>
        <form action="guardar-categoria.php" method='POST'>
            <label for='nombre'>Nombre de la Categoria:</label>
            <input type='text' name='nombre'>
            <?= isset($_SESSION['errores-categoria']) ? mostrarError($_SESSION['errores-categoria'], 'nombre') : ''  ?>
            <?= isset($_SESSION['errores-categoria']) ? mostrarError($_SESSION['errores-categoria'], 'existente') : ''  ?>
            
            <input type='submit' value='Guardar'>
        </form>
        <?php unset($_SESSION['errores-categoria']);?>
        
         
    </div><!-- fin principal -->
   

<?php include_once './includes/footer.php'; ?>

