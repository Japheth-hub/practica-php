/* 
Mostrar todos los vendedores con su nombre y los dias que lleva trabajando 
 */

SELECT nombre, DATEDIFF(CURDATE(),fecha_alta) AS DIAS_LABORANDO FROM vendedores;