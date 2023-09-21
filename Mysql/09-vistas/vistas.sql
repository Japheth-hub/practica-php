/*Vistas: Las podemos definir como una consulta almacenada en la base de datos
que se utilizan como tabla virtual.
No almacena datos sino que utiliza asociaciones y los datos originales de
las tablas, de forma que siempre se mantien actualizada*/

CREATE VIEW entradas_con_nombre AS
    SELECT e.id, e.titulo, u.nombre AS usuario, c.nombre AS categoria
    FROM entradas e, usuarios u, categorias c
    WHERE e.usuario_id=u.id AND e.categoria_id=c.id;
# NOTA= Es como almacenar una funcion en una variables #

# PARA ELIMINAR UNA DE ESTAS VISTAS USAMOS EL SIGUIENTE COMANDO #
DROP VIEW entradas_con_nombre;




