/* 
Obtener listado de clientes atendidos por su vendedor
Obtener lista de vendedores atendidos por el vendedor Juan lopez
Obtener lista de clientes atendidos por el grupo tehuacan
 */


SELECT cl.nombre, v.nombre
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id;


SELECT cl.nombre, v.nombre
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id AND v.nombre='juan';
# ---------------------------------------- # 
SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre='juan')


SELECT cl.nombre, v.nombre, g.nombre
FROM clientes cl
INNER JOIN vendedores v ON cl.vendedor_id=v.id
INNER JOIN grupos g ON v.grupo_id=g.id AND g.nombre='tehuacan';



