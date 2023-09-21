/* 
1.-Mostrar los 2 clientes que mas pedidos han hecho y mostrar cuantos hicieron
2.-Mostrar los 3 clientes con el mayor monto gastado y cuanto gastaron
 */

SELECT c.nombre, SUM(e.cantidad) AS total 
FROM clientes c, encargos e 
WHERE e.cliente_id=c.id 
GROUP BY c.nombre ORDER BY 2 DESC LIMIT 2;
# --------------------------------------------------------------------------- #

SELECT nombre, gastado FROM clientes ORDER BY gastado DESC LIMIT 3;











