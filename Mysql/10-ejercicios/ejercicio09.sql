/* 
Visualizar todos los coches en cuyo marca exista la letra 'a' y que empiezen con 'f'
 */

SELECT modelo FROM coches WHERE marca LIKE 'm%' AND marca LIKE '%a%';
# SIMPLIFICADO #
SELECT modelo FROM coches WHERE marca LIKE 'm%a%';






