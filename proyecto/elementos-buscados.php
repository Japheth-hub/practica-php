<?php include_once './includes/redireccionar.php';?> 
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>


<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Resultados de tu busqueda</h1>
        
        <?php
        $palabra = $_POST['buscar'] ?? '';
        $buscar = buscar($db, $palabra);
        
            if(!empty($buscar)):
            while ($busqueda = mysqli_fetch_assoc($buscar)):
//                var_dump($busqueda);
        ?>

            <article class="entradas">
                <a href="entradas.php?id=<?=$busqueda['id']?>">
                    <h2><?= $busqueda['titulo'] ?></h2>
                    <span class='fecha'><?= $busqueda['categoria']." | ".$busqueda['fecha']. ' | '.$busqueda['nombre'] ?></span>
                    <p>
                        <?= substr($busqueda['descripcion'], 0, 200)."..."; ?>
                    </p>
                </a>
            </article>
        <?php
            endwhile;
            endif
        ?>
        
    </div><!-- fin principal -->
   

<?php include_once './includes/footer.php'; ?>


