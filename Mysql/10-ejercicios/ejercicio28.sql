/* 
Visualizar los nombres de los clientes y la cantidad de encargos realizados
 */

# INSERTAR CLIENTE QUE NO HALLA HECHO PEDIDOS #
INSERT INTO clientes VALUES(null, 3, 'Kun Aguero', 'Argentina', 0, CURDATE());

# clientes con cantidad de encargos echos  #
SELECT cl.nombre, COUNT(e.cantidad)
FROM clientes cl
LEFT JOIN encargos e ON e.cliente_id=cl.id
GROUP BY cl.nombre;

# clientes con catidad de vehiculos pedidos #
SELECT cl.nombre, SUM(e.cantidad)
FROM clientes cl
LEFT JOIN encargos e ON e.cliente_id=cl.id
GROUP BY cl.nombre;






