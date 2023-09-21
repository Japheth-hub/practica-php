/* 
Mostrar nombre y apellidos de los vendedores en una misma columna, su fecha de 
registro y el dia de la semana en la que se registraron
 */

SELECT CONCAT(nombre,' ', apellidos) AS nombre, fecha_alta, DAYNAME(fecha_alta) FROM vendedores;

