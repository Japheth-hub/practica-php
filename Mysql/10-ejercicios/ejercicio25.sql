/* 
Listar los encargos con el nombre del coche, nombre del cliente y el nombre de la ciudad
 */

SELECT e.id, e.cantidad, c.modelo, cl.nombre, cl.ciudad
FROM encargos e
INNER JOIN clientes cl ON e.cliente_id=cl.id
INNER JOIN coches c ON e.coche_id=c.id ORDER BY e.id ASC;

# AQUI SOLO LOS DE MEXICO #

SELECT e.id, e.cantidad, cl.nombre, cl.ciudad
FROM encargos e
INNER JOIN coches c ON e.coche_id =c.id
INNER JOIN clientes cl ON e.cliente_id=cl.id AND cl.ciudad='mexico';
# SE PUEDE USAR WHERE O AND #
SELECT e.id, e.cantidad, cl.nombre, cl.ciudad
FROM encargos e
INNER JOIN coches c ON e.coche_id =c.id
INNER JOIN clientes cl ON e.cliente_id=cl.id WHERE cl.ciudad='mexico';



