/* 
Sacar vendedores que tienen jefe y sacar el nombre del jefe
 */

SELECT v1.nombre AS vendedor, v2.nombre AS jefes
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe=v2.id;







