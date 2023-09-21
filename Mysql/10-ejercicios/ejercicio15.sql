/* 
Visualizar las unidades vendidas de cada coche a cada cliente
Mostrar el nombre del producto, numero de cliente y la suma de unidades
 */

SELECT c.modelo AS 'coche', cl.nombre AS 'cliente', SUM(e.cantidad)
FROM encargos e
INNER JOIN coches c ON e.coche_id=c.id
INNER JOIN clientes cl ON e.cliente_id=cl.id
GROUP BY e.coche_id, e.cliente_id;










