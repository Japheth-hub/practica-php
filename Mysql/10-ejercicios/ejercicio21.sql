/* 
Seleccionar el grupo en el que trabaja el vendedor con mayor salario y
mostrar el nombre del grupo
 */

SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo= 
(SELECT MAX(sueldo) FROM vendedores WHERE cargo='vendedor'));



SELECT g.id, g.nombre, v.nombre, v.sueldo, v.cargo
FROM vendedores v
INNER JOIN grupos g ON g.id=v.grupo_id AND v.cargo='vendedor'
ORDER BY v.sueldo DESC LIMIT 1;











