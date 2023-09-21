/* 
Obtener un listado con los encargos realizados por el cliente Cristiano Ronaldo
 */
SELECT * FROM encargos WHERE cliente_id IN
(SELECT id FROM clientes WHERE nombre='cristiano ronaldo');


SELECT e.id, cl.nombre, c.modelo, e.cantidad, e.fecha
FROM encargos e
INNER JOIN clientes cl ON e.cliente_id=cl.id
INNER JOIN coches c ON e.coche_id=c.id AND cl.nombre='cristiano ronaldo';






