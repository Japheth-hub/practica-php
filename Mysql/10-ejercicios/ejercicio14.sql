/* 
Sacar la media de sueldos entre todos los vendedores por grupo
 */

SELECT AVG(sueldo) AS media_de_sueldo, grupo_id AS num_grupo, COUNT(id) 
FROM vendedores GROUP BY grupo_id;

# Mismo ejercicio con consulta multitabla #
SELECT AVG(v.sueldo) AS 'media de sueldos', g.nombre, COUNT(v.id)
FROM vendedores v
INNER JOIN grupos g ON v.grupo_id=g.id
GROUP BY  grupo_id;







