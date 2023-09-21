/* 
Obtener los vendedores con 2 o mas clientes
 */

SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)=1);



SELECT v.nombre, COUNT(cl.id) 
FROM vendedores v
INNER JOIN clientes cl ON cl.vendedor_id=v.id
GROUP BY cl.vendedor_id HAVING COUNT(cl.id)=2;









