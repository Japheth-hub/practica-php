# DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCESIONARIO # 

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches (
id      int(10) AUTO_INCREMENT NOT NULL,
modelo  varchar(100) NOT NULL,
marca   varchar(50),
precio  int(20) NOT NULL,
stock   int(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos (
id      int(10) AUTO_INCREMENT NOT NULL,
nombre  varchar(100) NOT NULL,
ciudad  varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE vendedores (
id          int(10) AUTO_INCREMENT NOT NULL,
grupo_id    int(10) NOT NULL,
jefe        int(10),
nombre      varchar(100) NOT NULL,
apellidos   varchar(150),
cargo       varchar(150),
fecha_alta  date,
sueldo      float(20,2),
comision    float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes (
id          int(10) AUTO_INCREMENT NOT NULL,
vendedor_id int(10),
nombre      varchar(100) NOT NULL,
ciudad      varchar(100),
gastado     float(50,2),
fecha       date,
CONSTRAINT pk_clientes PRIMARY KEY (id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id          int(10) AUTO_INCREMENT NOT NULL,
cliente_id  int(10) NOT NULL,
coche_id    int(10) NOT NULL,
cantidad    int(100),
fecha       date,
CONSTRAINT pk_encargos PRIMARY KEY (id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY (coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;











