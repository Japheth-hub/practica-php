# CONSULTAS DE AGRUPAMIENTO #
# Mostrar el numero de titulos por categoria_id de la tabla entradas #
SELECT COUNT(titulo) AS 'numero de titulos', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'numero de titulos', categoria_id FROM entradas 
GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/* Funciones de agrupamiento
AVG     SACAR LA MEDIA
MAX     DATO MAXIMO DE LA COLUMNA
MIN     DATO MINIMO DE LA COLUMNA
SUM     SUMA DE LOS DATOS DE LA COLUMNA
COUNT   CONTEO DE LOS DATOPS DE LA COLUMNA
*/
SELECT AVG(id) FROM entradas;
SELECT MAX(id) FROM entradas;
SELECT MAX(titulo) FROM entradas;
SELECT MIN(id) FROM entradas;
SELECT MIN(titulo) FROM entradas;
SELECT SUM(id) FROM entradas;
SELECT COUNT(titulo) FROM entradas;








