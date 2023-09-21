<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios php y HTML</title>
    </head>
    <body>
        <!--
            * La propiedad autofocus con su valor nos enfoca directamente en el 
            input seleccionado.
            * La propiedad "disabled="disabled"" deshabilita esa entrada input
            * La propiedad "maxlength" nos permite indicarle cuantos caracteres
            maximos podria ingresar el usuario al igual que la propiedad
            "minlength" nos permite indicarle un minimo de caracteres
            *La propiedad "pattern" nos permite colocar como valor expresiones
            regulares
            *La propiedad "required="required"" nos permite decirle al usuario
            que ese campo es obligatorio
            -->
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Nombre : 
                <input type="text" name="nombre" autofocus="autofocus" /></label>
            <hr>
            <label for="numero">Numero : 
                <input type="numbre" name="numero"/></label>
            <hr>
            <label for="sexo">Sexo</label>
                <input type="radio" name="sexo" />Hombre
                <input type="radio" name="sexo" />Mujer
            <hr>
            <select name="opciones">
                <option value="1">opcion 1</option>
                <option value="2">opcion 2</option>
                <option value="3">opcion 3</option>
                <option value="4">opcion 4</option>
            </select> 
            <hr>
            <label for="fecha">Date : 
                <input type="date" name="fecha"/></label>
            <hr>
            <label for="correo">Correo : 
                <input type="email" name="correo"/></label>
            <hr>
            <label for="arhivo">File : 
                <input type="file" name="archivo"/></label>
            <hr>
            <label for="password">Password : 
                <input type="password" name="password"/></label>
            <hr>
            <label for="color">Color : 
                <input type="color" name="color"/></label>
                <!--El type "hidden" es un metodo oculto-->
            <hr>
            <label for="cajas">Check box : </label>
                <input type="checkbox" name="cajas"/>opcion 1
                <input type="checkbox" name="cajas"/>opcion 2
                <input type="checkbox" name="cajas"/>opcion 3
            <hr>
            <label for="web">Pagina Web : 
                <input type="url" name="web"/></label>
            <hr>
            <label for="comentario">Comentarios</label>
            <textarea name="comentario" ></textarea>
            
            <input type="submit" value="enviar" />
        </form>
    </body>
</html> 