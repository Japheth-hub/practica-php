<?php

/*
 * help; == nos da ayuda de varios comandos que podemos utilizar con sus respectivas descripciones
 * status; == sirve para ver la version y el usuario actual de mysql
 * create database base_de_datos; == nos permite crear una base de datos con el nombre que querramos
 * show databases; == nos muestra las bases de datos que ya hemos creado
 * use base_de_datos; == con esta funcion podemos usar la base de datos que querramos
 * show tables; ==  nos muestra si tenemos tablas en la base de datos
 * desc base_de_datos; == nos describe como esta formada nuestra tabla de la base de datos
 * drop database base_de_datos; == borrar o eliminar nuestra base_de_datos
 * drop table base_de_datos; == eliminar nuestra table de la base_de_datos
 * select * from nuevos_usuarios; == Nos muestra todos los datos de nuestra tabla porque estamos utilizando el (*) podemos cambiar el (*) por el nombre de una columna para que nos muestre todos los datos de esa columna
 * ALTER TABLE usuarios RENAME TO nuevos_usuarios; == cambiar nombre de una tabla
 * ALTER TABLE nuevos_usuarios CHANGE apellidos apellido VARCHAR(100) NULL; == cambiar nombre de columna
 * ALTER TABLE nuevos_usuarios MODIFY apellido CHAR(50) NOT NULL; == Modificar (tipo de dato y restricciones) de una columna sin cambiar el nombre
 * ALTER TABLE nuevos_usuarios ADD edad INT(100) NOT NULL; == Añadir una columna a una tabla
 * ALTER TABLE nuevos_usuarios ADD CONSTRAINT uq_email UNIQUE(email); == Añadir una restriccion a una columna
 
 * CONSTRAINT pk_usuarios PRIMARY KEY(id)==Nos permite definir cual es el PRIMARY KEY de nuestra tabla usando la restriccion (CONSTRAINT)
 * 
 */
