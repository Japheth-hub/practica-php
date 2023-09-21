
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>

<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <?php if(isset($_SESSION['eliminado'])):?>
            <div class='alerta alerta-exito'>
                <?= $_SESSION['eliminado'] ?>
            </div>
        <?php unset($_SESSION['eliminado']);
        endif;?>
        <?php if(isset($_SESSION['iniciar_sesion'])):?>
            <div class='alerta alerta-error'>
                <?= $_SESSION['iniciar_sesion'] ?>
            </div>
        <?php unset($_SESSION['iniciar_sesion']);
        endif;?>
        
        <h1>Ultimas Entradas</h1>
        
        <?php if(isset($_SESSION['entrada-creada'])):?>
                <div class='alerta alerta-exito'>
                     <?= $_SESSION['entrada-creada'] ?>
                </div>
        <?php
        unset($_SESSION['entrada-creada']);
        endif;?>
        
        <?php if(isset($_SESSION['categoria-creada'])):?>
                <div class='alerta alerta-exito'>
                     <?= $_SESSION['categoria-creada'] ?>
                </div>
        <?php
        unset($_SESSION['categoria-creada']);
        endif;?>
        
        <?php
            unset($_SESSION['datos-antes']);
            unset($_SESSION['actualizar']);
            if(isset($_SESSION['actualizado_con_password'])){
            //var_dump($_SESSION);
                unset($_SESSION['contraseña-encriptada']);
                unset($_SESSION['usuario']);
                unset($_SESSION['datos-antes']);
                unset($_SESSION['actualizar']);
              header('Location: index.php');          
            //  var_dump($_SESSION);
            }
            if(isset($_SESSION['actualizado_sin_password'])){
            //var_dump($_SESSION);
                unset($_SESSION['contraseña-encriptada']);
                unset($_SESSION['datos-antes']);
                unset($_SESSION['actualizar']);
              header('Location: index.php');          
            //  var_dump($_SESSION);
            }
            $entradas = entradas($db);
            if(!empty($entradas)):
            while ($entrada = mysqli_fetch_assoc($entradas)):
                //var_dump($entrad);
            $categoria_id = $_SESSION['categoria_id' ] ?? '';
            $inicio = $_GET['id'] ?? '';
            if($entrada['categoria_id'] == $categoria_id || $inicio=='inicio'):      
        ?>
            <article class="entradas">
                <a href="entradas.php?id=<?=$entrada['id']?>">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class='fecha'><?= $entrada['categoria']." | ".$entrada['fecha'] ?></span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 200)."..."; ?>
                    </p>
                </a>
            </article>
        <?php 
        endif;
        endwhile;
        endif;
        unset($_SESSION['categoria_id']);
        
        ?>
        
        
        <div id="ver-todas">
            <a href="index.php?id=inicio">Ver Todas las entradas</a>
        </div>
    </div>

<?php include_once './includes/footer.php'; ?>





