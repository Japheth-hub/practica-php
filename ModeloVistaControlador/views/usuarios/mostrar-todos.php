<h1>Listado de Usuarios</h1>

<?php while($usuario = $usuarios->fetch_object()):?>
    <?= $usuario->nombre.'<br>' ?>
<?php endwhile;?>

