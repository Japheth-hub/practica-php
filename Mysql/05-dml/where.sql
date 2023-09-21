# CONSULTA CON UNA CONDICION ------------------------------------------------ #
/*COMODINES
Cualquier cantidad de caracteres = %
Un caracter desconocido = _
*/
# Mostrar usuarios con un nombre mayor a 6 letras #
SELECT * FROM usuario WHERE LENGTH(nombre)>6;
# Mostrar usuarios con fecha despues del 2020 #
SELECT * FROM usuarios WHERE YEAR(fecha)>2020;
# Mostrar usuarios que no tengan apellido(o que sea null) #
SELECT * FROM usuarios WHERE apellidos IS NULL;
# Mostrar usuarios que tengan apellido(que no sean null) #
SELECT * FROM usuarios WHERE apellidos IS NOT NULL;
# Mostrar usuarios con un nombre menor a 8 letras y que tenga apellidos #
SELECT * FROM usuarios WHERE LENGTH(nombre)<8 AND apellidos IS NOT NULL;
# Mostrar a los usuarios con el id entre el 3 y el 5 #
SELECT * FROM usuarios WHERE id BETWEEN 3 AND 5;
# Mostrar a los usuarios con fecha del año 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)=2019;
# Mostrar a los usuarios con fecha que no sean del 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha)!=2019;
# Mostrar email de los usuarios que tengan en su apellido la letra a y con fecha del 2020 #
SELECT email, fecha FROM usuarios WHERE apellidos LIKE '%a%' AND YEAR(fecha)=2020;
# Mostrar usuarios que su fecha sea un año par #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2=0);
# Mostrar los registros cuyo nombre tenga maa de 5 letras y que la fecha sea del 2020 #
SELECT *,UPPER(nombre) AS nombre FROM usuarios WHERE LENGTH(nombre)>5 AND YEAR(fecha)<2020;





