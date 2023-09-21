# BORAR REGISTROS #

DELETE FROM usuarios;# Con esta funcion se borrarian todos los datos #
# Borar filas cuando email sea nulo #
DELETE FROM usuarios WHERE email IS NULL;




SELECT e.titulo, e.descripcion, u.nombre, u.apellidos
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id=u.id
WHERE e.titulo LIKE '%on%' OR e.descripcion LIKE '%on%' 
OR u.nombre LIKE '%on%' OR u.apellidos LIKE '%on%';









