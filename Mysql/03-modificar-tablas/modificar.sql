# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO nuevos_usuarios;

# Cambiar el nombre de una columna #
ALTER TABLE nuevos_usuarios CHANGE apellidos apellido VARCHAR(100) NULL;

# Modificar (tipo de dato y restricion) de columnas sin cambiar nombre #
ALTER TABLE nuevos_usuarios MODIFY apellido CHAR(50) NOT NULL;

# Añadir nueva columna a una tabla #
ALTER TABLE nuevos_usuarios ADD edad INT(100) NOT NULL;

# Añadir una restriccion a la columna #
ALTER TABLE nuevos_usuarios ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar una columna #
ALTER TABLE nuevos_usurios DROP edad;

















