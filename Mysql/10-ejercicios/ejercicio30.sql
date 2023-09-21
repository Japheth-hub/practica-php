/*
Crear una vista llamada gerentes que incluira a todos los gerentes
*/
CREATE VIEW gerentes AS
SELECT * FROM vendedores WHERE cargo LIKE 'gerente%';

/*
Crear una lista llamada vendedores_tehuacan que inlcuira a todos los
vendedores del grupo Tehuacan
*/
CREATE VIEW grupo_tehuacan AS
SELECT * FROM vendedores WHERE grupo_id IN
(SELECT id FROM grupos WHERE nombre='tehuacan');


/* 
Crear una vista llamada 'vendedores A' que incluira todos los vendedores
cuya venta sea mayor a los 400,000
 */

CREATE VIEW vendedores_A AS
SELECT CONCAT(v.nombre, ' ', v.apellidos) AS vendedor, SUM(c.precio*e.cantidad) AS ventas_totales
FROM vendedores v
INNER JOIN clientes cl ON cl.vendedor_id=v.id
INNER JOIN encargos e ON e.cliente_id=cl.id
INNER JOIN coches c ON e.coche_id=c.id
GROUP BY v.nombre HAVING SUM(c.precio*e.cantidad)>400000 ORDER BY 2 DESC;

    








