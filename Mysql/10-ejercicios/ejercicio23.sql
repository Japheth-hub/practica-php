/*
Mostrar listado de clientes mostrando el num. de cliente y nombre y luego 
mostrar el numero del vendedor y vendedor
 */


SELECT cl.id, cl.nombre, v.id, v.nombre
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id;


SELECT cl.id, cl.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos)
FROM clientes cl, vendedores v 
WHERE cl.vendedor_id=v.id;








