/* 
Mostrar una lista de clientes que hallan echo un encargo del RENAULT CLIO
 */

SELECT cl.id, cl.nombre, c.modelo, e.cantidad
FROM encargos e
INNER JOIN clientes cl ON e.cliente_id=cl.id
INNER JOIN coches c ON e.coche_id=c.id AND c.modelo='renault clio';

SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
(SELECT id FROM coches WHERE modelo LIKE '%renault%'));







