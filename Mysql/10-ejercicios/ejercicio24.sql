/* 
Listar todos los encargos realizados con la marac del coche y el nombre del cliente
 */


SELECT e.cantidad, c.modelo, cl.nombre
FROM encargos e
INNER JOIN coches c ON e.coche_id=c.id
INNER JOIN clientes cl ON e.cliente_id=cl.id;


SELECT e.cantidad, c.modelo, cl.nombre
FROM encargos e, coches c, clientes cl
WHERE e.cliente_id=cl.id AND e.coche_id=c.id;








