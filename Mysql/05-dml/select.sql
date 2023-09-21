# Mostrar todos los registros / filas de una tabla------------------------- #
SELECT * FROM usuarios;
SELECT nombre, apellidos, email FROM usuarios;

# OPERADORES ARITMETICOS ---------------------------------------------------#
SELECT email,(10+5) AS OPERACION FROM usuarios;# OPERACION MATEMATICO ENTRE PARENTECIS #
SELECT id, email FROM usuarios ORDER BY id ASC;# ORDENAR ASCENDENTE #
SELECT id, email FROM usuarios ORDER BY id DESC;# ORDENAR DESCENDENTE #
SELECT * FROM usuarios LIMIT 2;# LIMITA A UN NUMERO ESPECIFICO DE FILAS #
SELECT * FROM usuarios LIMIT 2,3;# OMITE EL PRIMER NUMERO DE FILAS Y NOS MUESTRA EL SEGUNDO NUMERO DE FILAS #
SELECT nombre, (id*id) FROM usuarios;# OPERACION MATEMATICA ENTRE PARENTECIS CON COLUMNAS #

# FUNCIONES MATEMATICAS---------------------------------------------------- # 
SELECT ABS(1.5) AS funciones FROM usuarios;# VALOR ABSOLUTO #
SELECT CEIL(1.5) AS funciones FROM usuarios;# REDONDEAR ARIIBA #
SELECT FLOOR(1.5) AS funciones FROM usuarios;# REDONDEAR ABAJO #
SELECT PI() AS funciones FROM usuarios;# VALOR DE PI #
SELECT RAND() AS funciones FROM usuarios;# NUMERO ALEATORIO MENOR A 1 #
SELECT ROUND(1.78,1) AS funciones FROM usuarios;# REDONDEAR UN NUMERO, CUANTOS DECIMALES QUEROMOS #
SELECT TRUNCATE(1.78, 1) AS funciones FROM usuarios;# DECIDIR CUANTOS DECIMALES QUEREMOS #
SELECT SQRT(25) AS funciones FROM usuarios;# RAIZ CUADRADA #
SELECT FLOOR(RAND()*100) AS funciones FROM usuarios;# REDONDEAR UN NUMERO ALEATRORIO * 100 #

# FUNCIONES PARA TEXTO------------------------------------------------------ #
SELECT UPPER(nombre) AS mayusculas FROM usuarios;# MAYUSCULAS #
SELECT LOWER(nombre) AS minusculas FROM usuarios;# MINUSCULAS #
SELECT CONCAT(nombre, ' ', apellidos) AS conversion FROM usuarios;# CONCATENAR #
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS mayusculas FROM usuarios;
SELECT LENGTH(nombre) AS longitud FROM usuarios;# LONGITUD DE TU COLUMNA #
SELECT TRIM(nombre) AS elimanar_espacios FROM usuarios;# ELIMIANR ESPACIOS #

 # FUNCIONES PARA FECHAS----------------------------------------------------- #
SELECT nombre, fecha, CURDATE() AS fecha_actual FROM usuarios;# FECHA ACTUAL #  
SELECT nombre, DATEDIFF(CURDATE(),fecha) AS fecha_actual FROM usuarios;# DIFERENCIA EN DIAS #
SELECT nombre, DAYNAME(fecha) AS fecha_actual FROM usuarios;# NOMBRE DEL DIA #
SELECT nombre, DAYOFMONTH(fecha) AS dia_del_mes FROM usuarios;# DIA DEL MES #
SELECT nombre, DAYOFWEEK(fecha) AS dia_de_la_semana FROM usuarios;# DIA DE LA SEMANA #
SELECT nombre, DAYOFYEAR(fecha) AS dia_del_año FROM usuarios;# DIA DEL AÑO #
SELECT nombre, MONTH(fecha) AS mes_del_año FROM usuarios;# MES DE LA FECHA #
SELECT nombre, YEAR(fecha) AS año FROM usuarios;# AÑO DE LA FECHA #
SELECT nombre, DAY(fecha) AS dia FROM usuarios;# DIA DE LA FECHA #
SELECT nombre, HOUR(fecha) AS hora_del_dia FROM usuarios;# HORA DEL DIA # 
SELECT nombre, CURTIME() AS hora_actual FROM usuarios;# HORA ACTUAL #
SELECT nombre, SYSDATE() AS fecha_hora_del_sistema FROM usuarios;# FECHA Y HORA DEL SISTEMA #
SELECT nombre, DATE_FORMAT(fecha,'%d-%m-%y') FROM usuarios;# FORMATO DE FECHA #
 
# FUNCIONES GENERALES--------------------------------------------------------- #
SELECT email, ISNULL(apellidos) FROM usuarios;# SI ES NULL #
SELECT email, STRCMP('HOLA','HOLA') FROM usuarios;# COMPARACION DE STRING #
SELECT email, STRCMP('HOLA','HOLAA') FROM usuarios;
SELECT VERSION() FROM usuarios;# VERSION DE MYSQL #
SELECT USER() FROM usuarios;# USUARIO QUE CREO LOS DATOS DE LA TABLA #
SELECT DISTINCT USER() FROM usuarios;# USARIOS QUE CREARON DATOS DE LA TABLA(sin repetir usuario) #
SELECT DATABASE() FROM usuarios;# BASE DE DATOS DENODE SE ENCUENTRA LA TABLA #
SELECT IFNULL(apellidos,'SI ES NULO PODEMOS PONER TEXTO EN ESA COLUMNA') FROM usuarios;# CONDICION #







