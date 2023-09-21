/* 
Mostrar todos los vendedores tengan o no clientes y mostrar el numero de clientes
 */

# AGREGRA VENDEDOR QUE NO TENGA CLIENTES #
INSERT INTO vendedores VALUES(null, 3, 7, 'Luca', 'Modrick', 'Auxiliar', CURDATE(), 10200, 2.3);


# EJERCICIO #
SELECT CONCAT(v.nombre,' ', v.apellidos), COUNT(cl.id)
FROM vendedores v
LEFT JOIN clientes cl ON v.id=cl.vendedor_id
GROUP BY v.nombre;








