# RELLENAR LAS TABLAS CON --- INSERTS #

# COCHES #
INSERT INTO coches VALUES(null, 'Renault Clio', 'Renault', 67000, 4);
INSERT INTO coches VALUES(null, 'Mazda 3', 'Mazda', 358000, 2);
INSERT INTO coches VALUES(null, 'Sentra', 'Nissan', 420000, 3);
INSERT INTO coches VALUES(null, 'Blazer', 'Chevrolet', 990000, 1);
INSERT INTO coches VALUES(null, 'Jetta', 'VW', 150000, 3);
INSERT INTO coches VALUES(null, 'Corolla', 'Toyota', 290000, 2);

# Grupos #
INSERT INTO grupos VALUES(null, 'Tehuacan', 'Puebla');
INSERT INTO grupos VALUES(null, 'La Paz', 'Baja California');
INSERT INTO grupos VALUES(null, 'Orizaba', 'Veracruz');
INSERT INTO grupos VALUES(null, 'Jalisco', 'Guadalajara');
INSERT INTO grupos VALUES(null, 'Tehuacan B', 'Puebla');

# VENDEDORES #
INSERT INTO vendedores VALUES(null,1, null, 'Angel', 'Ramirez', 'Gerente General', CURDATE(), 25000, 3.5);
INSERT INTO vendedores VALUES(null,1, 1, 'Juan', 'Lopez', 'Vendedor', CURDATE(), 15700, 2.8);
INSERT INTO vendedores VALUES(null,1, 1, 'Pedro', 'Hernandez', 'Vendedor', CURDATE(), 13100, 2.3);
INSERT INTO vendedores VALUES(null,2, null, 'Abigail', 'Cortes', 'Gerente General', CURDATE(), 25000, 3.5);
INSERT INTO vendedores VALUES(null,2, 4, 'Pablo', 'Rodriguez', 'Vendedor', CURDATE(), 12300, 2.2);
INSERT INTO vendedores VALUES(null,2, 4, 'Lucas', 'Fernadez', 'Vendedor', CURDATE(), 11800, 1.9);
INSERT INTO vendedores VALUES(null,3, null, 'Japheth', 'Aguilar', 'Gerente General', CURDATE(), 25000, 3.5);
INSERT INTO vendedores VALUES(null,3, 7, 'Miguel', 'Gonzalez', 'Vendedor', CURDATE(), 14500, 2.7);
INSERT INTO vendedores VALUES(null,4, null, 'Leonel', 'Messi', 'Gerente General', CURDATE(), 25000, 3.5);
INSERT INTO vendedores VALUES(null,4, 9, 'Jose', 'Jimenez', 'Vendedor', CURDATE(), 12700, 2.1);
INSERT INTO vendedores VALUES(null,4, 9, 'Felipe', 'Gutierrez', 'Vendedor', CURDATE(), 11600, 2.3);
INSERT INTO vendedores VALUES(null,5, null, 'Checo', 'Perez', 'Gerente General', CURDATE(), 25000, 3.5);
INSERT INTO vendedores VALUES(null,5, 12, 'Eduardo', 'Cota', 'Vendedor', CURDATE(), 13300, 2.4);

# Clientes #
INSERT INTO clientes VALUES(null, 10, 'Cristiano Ronaldo', 'Portugal', 990000, CURDATE());
INSERT INTO clientes VALUES(null, 3, 'Ronaldinho', 'Brasil', 290000, CURDATE());
INSERT INTO clientes VALUES(null, 6, 'Kilian Mbappe', 'Francia', 150000, CURDATE());
INSERT INTO clientes VALUES(null, 2, 'Guillermo Ochoa', 'Mexico', 67000, CURDATE());
INSERT INTO clientes VALUES(null, 9, 'Van Persie', 'Paises Bajos', 420000, CURDATE());
INSERT INTO clientes VALUES(null, 13, 'Oliver Khan', 'Alemania', 150000, CURDATE());
INSERT INTO clientes VALUES(null, 8, 'Luis Diaz', 'Colombia', 67000, CURDATE());
INSERT INTO clientes VALUES(null, 4, 'Sadio Mane', 'Senegal', 420000, CURDATE());
INSERT INTO clientes VALUES(null, 1, 'Luis Suarez', 'Uruguay', 150000, CURDATE());
INSERT INTO clientes VALUES(null, 12, 'Mercado Libre', 'Argentina', 67000, CURDATE());
INSERT INTO clientes VALUES(null, 5, 'Polleria Mony', 'Mexico', 290000, CURDATE());
INSERT INTO clientes VALUES(null, 7, 'Empresa 1', 'Estados Unidos', 487000, CURDATE());
INSERT INTO clientes VALUES(null, 11, 'Empresa 2', 'Canada', 716000, CURDATE());

# ENCARGOS #
INSERT INTO encargos VALUES(null,1, 4, 1, CURDATE());
INSERT INTO encargos VALUES(null,2, 6, 1, CURDATE());
INSERT INTO encargos VALUES(null,3, 5, 1, CURDATE());
INSERT INTO encargos VALUES(null,4, 1, 1, CURDATE());
INSERT INTO encargos VALUES(null,5, 3, 1, CURDATE());
INSERT INTO encargos VALUES(null,6, 5, 1, CURDATE());
INSERT INTO encargos VALUES(null,7, 1, 1, CURDATE());
INSERT INTO encargos VALUES(null,8, 3, 1, CURDATE());
INSERT INTO encargos VALUES(null,9, 5, 1, CURDATE());
INSERT INTO encargos VALUES(null,10, 1, 1, CURDATE());
INSERT INTO encargos VALUES(null,11, 6, 1, CURDATE());
INSERT INTO encargos VALUES(null,12, 1, 1, CURDATE());
INSERT INTO encargos VALUES(null,12, 3, 1, CURDATE());
INSERT INTO encargos VALUES(null,13, 2, 2, CURDATE());

# EJERCICIO DE PRACTICA #
# Mostrar nombre del cliente, cuanto gasto, cantidad de vehiculos, modelo del vehiculo, nombre del vendedor y a que grupo pertenece #

SELECT clientes.nombre, cantidad, modelo, vendedores.nombre, grupos.nombre
FROM clientes, encargos, coches , vendedores, grupos
WHERE encargos.cliente_id=clientes.id 
AND encargos.coche_id=coches.id 
AND clientes.vendedor_id=vendedores.id
AND vendedores.grupo_id=grupos.id;


SELECT clientes.nombre,gastado, cantidad, modelo, vendedores.nombre, grupos.nombre
FROM clientes
INNER JOIN encargos ON encargos.cliente_id=clientes.id
INNER JOIN coches ON encargos.coche_id=coches.id
INNER JOIN vendedores ON clientes.vendedor_id=vendedores.id
INNER JOIN grupos ON vendedores.grupo_id=grupos.id;
















