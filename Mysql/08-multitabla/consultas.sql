/*
CONSULTAS MULTITABLA
Consultas que sirven para consultar varias tablas en una misma sentencia
*/

# Mostrar las entradas con el nombre del autor y el nombre de la categoria #
SELECT entradas.id, entradas.titulo, usuarios.nombre AS usuario, categorias.nombre AS categoria
    FROM entradas, usuarios, categorias
    WHERE entradas.usuario_id=usuarios.id AND entradas.categoria_id=categorias.id;
# Este es el mismo ejemplo pero con codigo mas reducido #
SELECT e.id, e.titulo, u.nombre AS usuario, c.nombre AS categoria
    FROM entradas e, usuarios u, categorias c
    WHERE e.usuario_id=u.id AND e.categoria_id=c.id;
# ----------------------------------------------------------------------------- #

# Mostrar el nombre de las categorias y a lado cuantas entradas tiene #
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
    WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# Mostrar el email de los usuarios y a lado cuantas entradas tiene #
 SELECT u.email, COUNT(e.titulo) FROM usuarios u, entradas e
    WHERE e.usuario_id = u.id GROUP BY e.usuario_id;
# ---------------------------------------------------------------------------- #

# ------------------------------INNER JOIN -----------------------------------#
# Mostrar las entradas con el nombre del autor y el nombre de la categoria #
SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

# ------------------------------LEFT JOIN------------------------------------ #   
# Mostrar el nombre de las categorias y a lado cuantas entradas tiene #
SELECT c.nombre, COUNT(e.id)
FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

# -------------------------------RIGHT JOIN --------------------------------- #
# Mostrar el nombre de las categorias y a lado cuantas entradas tiene #
SELECT c.nombre, COUNT(e.id)
FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id GROUP BY e.categoria_id;





