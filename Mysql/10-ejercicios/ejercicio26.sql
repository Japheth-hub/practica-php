/* 
Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados
 */


SELECT cl.nombre, SUM(e.cantidad*c.precio)
FROM encargos e
INNER JOIN coches c ON e.coche_id=c.id
INNER JOIN clientes cl ON e.cliente_id=cl.id
GROUP BY cl.nombre;









