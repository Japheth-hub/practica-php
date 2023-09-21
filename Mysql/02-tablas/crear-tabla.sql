/*
                          Crear una tabla
Tipos de datos de las columnas
-int(n° de cifras)                      ENTERO              
-integer(n° de cifras)                  ENTERO              (MAXIMO 4294967295)
-varchar(n° de caracteres)              STRING/ALFANUMERICO (MAXIMO DE 255 CARACTERES)
-char(n° de caracteres)                 STRING/ALFANUMERICO (MAXIMO DE 255 CARACTERES)
-float(n° de cifras, n° de decimales)   DECIMAL O COMA FLOTANTE 
-date, time, timestamp
-TEXT - 65 mil  caracteres
-MEDIUMTEXT - 16 millones de caracteres
-LONGTEXT - 4 billones de caracteres
//ENTEROS MAS GRANDES
-MEDIUMINT
-BIGINT

                           RESTRICCIONES BASICAS
Clave Primaria (Primary Key): Es una columna o conjunto de columnas que identifica de manera única cada fila en la tabla. Ayuda a asegurar que no haya duplicados y permite un acceso eficiente a los datos. Se declara al crear la tabla y garantiza que los valores de la clave primaria no sean nulos.
Clave Única (Unique Constraint): Garantiza que los valores en una columna o conjunto de columnas sean únicos en toda la tabla. A diferencia de la clave primaria, puede haber varios registros con valores NULL en una columna con restricción única.
(Foreign Key Constraint): Establece una relación entre dos tablas basada en una columna común. Garantiza que los valores en la columna referenciada existan en la tabla relacionada.
(NOT NULL Constraint): Asegura que los valores en una columna no sean nulos.
(Default Constraint): Define un valor predeterminado para una columna si no se proporciona un valor explícito.
(Check Constraint): Permite definir condiciones que deben cumplirse para los valores en una columna.
(AUTO_INCREMENT): Se utiliza para generar automáticamente valores únicos incrementales para una columna, generalmente para la clave primaria
*/

CREATE TABLE usuarios(
id          INT(11) AUTO_INCREMENT NOT NULL,
nombre      VARCHAR(100) NOT NULL,
apellidos   VARCHAR(255) DEFAULT 'hola que tal',
email       VARCHAR(100) NOT NULL,
password    VARCHAR(255) ,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);