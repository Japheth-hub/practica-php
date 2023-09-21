    <!-- BARRA LATERAL --------------------------------------------------->
<aside id="sidebar">
    <div id="buscador" class="bloque">
            <h3>Buscar</h3>

            <form action="elementos-buscados.php" method="POST">
                <label for="buscar">Buscador</label>
                <input type="text" name="buscar">

                <input type="submit" name="submit" value="Entrar">
            </form>
        </div>
    
    <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logeado" class="bloque">
            <h4>
                <?="Bienvenido ".$_SESSION['usuario']['nombre']." ".$_SESSION['usuario']['apellidos']; ?>
            </h4>
            <!-- Botones -->
            <?php
            
            if(isset($_SESSION['contraseña-encriptada']) && $_SESSION['contraseña-encriptada'] == false){
                echo '<h3 class="alerta alerta-error">Favor de actualizar su contraseña</h3>';
            }
            
            if(isset($_SESSION[ 'actualizado_sin_passwrod' ])){
                echo $_SESSION[ 'actualizado_sin_passwrod' ];
                unset($_SESSION[ 'actualizado_sin_passwrod' ]);
            }
            ?>
            <a class="boton boton-verde" href="crear-entradas.php">Crear Entradas</a>
            <a class="boton" href="crear-categoria.php">Crear Categoria</a>
            <a class="boton boton-naranja" href="mis-datos.php">Mis Datos</a>
            <a class="boton boton-rojo" href="cerrar.php">Cerrar Sesion</a>
        </div>
    <?php endif; ?>
    
    <?php if(!isset($_SESSION['usuario'])): ?>  
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <?php
            if(isset($_SESSION['actualizado_con_password'])){
                echo $_SESSION['actualizado_con_password'];
                session_unset();
            }
            ?>
            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                    <h4>
                        <?=$_SESSION['error_login']; ?>
                    </h4>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" name="submit" value="Entrar">
            </form>
        </div>
        <div id="registro" class="bloque">
            <h3>Registrate</h3>

            <!--Mostrar errores -->

            <?php if(isset($_SESSION['completado'])): ?>
                <div class='alerta alerta-exito'>
                     <?= $_SESSION['completado'] ?>
                </div>
            <?php elseif(isset($_SESSION['errores']['general'])):?>
                <div class='alerta alerta-error'>
                     <?= $_SESSION['errores']['general'] ?>
                </div>
            <?php endif; ?>

            <form action="../proyecto/registro.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ?>

                <label for="email">Correo</label>
                <input type="email" name="email">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>
                
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>

                <input type="submit" name="submit" value="Registrar">
            </form>
           <?php borrarErrores(); ?>
        </div>
    <?php endif; ?>
</aside>

