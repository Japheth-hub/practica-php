<?php include_once './includes/redireccionar.php'; ?>
<?php include_once './includes/cabecera.php';?> 
<?php include_once './includes/lateral.php';?>


<!-- CAJA PRINCIPAL -------------------------------------------------->
    <div id="principal">
        <h1>Actualizar Datos</h1>
        <p>
            Aqui podra modificar tus datos personales para mantenermos actualizados
        </p>
        <?php 
            //var_dump($_SESSION);
        ?>
        <br>
        <div class="bloque">
            <h4>
               Datos Actuales
            </h4>
            <p>Nombre : <?= $_SESSION['usuario']['nombre'] ?></p>
            <p>Apellido : <?= $_SESSION['usuario']['apellidos'] ?></p>
            <p>Correo : <?= $_SESSION['usuario']['email'] ?></p>
                
            
            
        </div>
        <form action="./actualizar-datos.php" method="POST">
            
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?= isset($_SESSION['error-actualizar']) ? mostrarError($_SESSION['error-actualizar'], 'nombre') : ''  ?>
            
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?= isset($_SESSION['error-actualizar']) ? mostrarError($_SESSION['error-actualizar'], 'apellidos') : ''  ?>
 

            <label for="email">Correo</label>
            <input type="email" name="email">
            <?= isset($_SESSION['error-actualizar']) ? mostrarError($_SESSION['error-actualizar'], 'email') : ''  ?>
            <?= isset($_SESSION ['error-actualizar']['correo-existente']) ? "<div class='alerta alerta-error'>Este correo ya existe</div>" : ''?>
            

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            

            <input type="submit" name="submit" value="Actualizar">
        </form>
        <?php 
        unset($_SESSION['error-actualizar']);
        ?>
         
    </div><!-- fin principal -->
   

<?php include_once './includes/footer.php'; ?>


