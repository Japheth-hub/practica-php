# MODIFICAR FILA O ACTUALIZAR DATOS #

# WHERE se usa para modificar la fila segun se cumpla la condicion #
UPDATE usuarios SET apellidos='pequeña' WHERE nombre='pequeña';
# Si no ocupamos WHERE, la actualizacion se ejecutara en todas las filas # 
UPDATE usuarios SET id=rand()*100;




UPDATE clientes SET nombre='Amazon', ciudad='Toronto' WHERE id=13;














