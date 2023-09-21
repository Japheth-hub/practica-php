/* 
Obtener los nombres y las ciudades de los clientes con encargos mayores a 400,000
 */
 
SELECT * FROM clientes WHERE gastado >400000 AND id IN
(SELECT cliente_id FROM encargos);


SELECT cl.nombre, cl.ciudad, SUM(c.precio*e.cantidad), SUM(e.cantidad)
FROM encargos e
INNER JOIN clientes cl ON e.cliente_id=cl.id
INNER JOIN coches c ON e.coche_id=c.id AND cl.gastado>400000 GROUP BY cl.nombre;

/* 
Obtener los nombres y las ciudades de los clientes con mas de 1 encargo
 */

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad>1);







