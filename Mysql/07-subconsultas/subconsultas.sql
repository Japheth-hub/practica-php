# Consultas que se ejecutan dentro de otras consultas #
/*En este ejemplo MOSTRAMOS todos los datos de la tabla usuarios SOLO CUANDO SU id ESTE DENTRO 
de la subconsulta(en este caso seria la tabala entradas en su columna usuario_id)*/
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

/*En este ejemplo MOSTRAMOS los usuarios que NO tengas su id regustrado o relacionado
en la (tabla ENTRADAS en su columna USUARIO_ID)*/
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan el juego de EFOOTBALL # 
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo='efootball');

# Sacar a los usuarios que en su titulo tengan la palabra GTA #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');

# Sacar todas las entradas de la categoria accion utilizando su nombre#
SELECT * FROM entradas WHERE categoria_id 
    IN (SELECT id FROM categorias WHERE nombre='accion');

# Mostrar las categofria con mas de 3 entradas #
SELECT * FROM categorias WHERE id IN
    (SELECT categoria_id  FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) > 3);

# Mostrar a los usarios que crearon una entrada un martes #
SELECT * FROM usuarios WHERE id IN 
    (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3);

# Mostra el nombre de usuario que tengas mas entradas #
SELECT * FROM usuarios WHERE id =
    (SELECT * FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostra las categorias sin entradas #
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas );
