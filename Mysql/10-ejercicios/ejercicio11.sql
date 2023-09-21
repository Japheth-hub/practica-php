/* 
Visualizar los apellidos de los vendedores, su fecha de alta, numero de grupo
ordenado sueldo de mayo a menor y solo mostrar los 4 ultimos
 */
SELECT apellidos, fecha_alta, grupo_id FROM vendedores ORDER BY sueldo DESC LIMIT 4;

