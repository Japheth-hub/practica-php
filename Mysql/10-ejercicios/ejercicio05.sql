/* 
Sacar a todos los vendedores cuya fecha sea posterior al 1 de julio de 2023
 */

SELECT * FROM vendedores WHERE YEAR(fecha_alta)>=2023 AND MONTH(fecha_alta)>=7 AND DAY(fecha_alta)>1;
SELECT * FROM vendedores WHERE fecha_alta>='2023-07-01';
