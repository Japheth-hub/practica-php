/*Mostrar los datos del vendedor con mas antiguedad en el concesionario*/
SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

/*Obtener los coches con mas unidades vendidas*/
SELECT c.modelo, COUNT(e.id)
FROM coches c
INNER JOIN encargos e ON e.coche_id=c.id
GROUP BY c.modelo ORDER BY 2 DESC;




# INVESTIGAR MAS PARA RESOLVER ESTE EJERCICIO CON SUBCONSULTAS #
SELECT * FROM coches WHERE id IN 
(SELECT coche_id FROM encargos WHERE cantidad IN
(SELECT MAX(cantidad) FROM encargos));
