CREATE DATABASE notas_master;
use notas_master;
CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
) ENGINE = InnoDb;
CREATE TABLE notas(
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) NOT NULL,
    titulo varchar(200) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha date NOT NULL,
    CONSTRAINT pk_notas PRIMARY KEY(id),
    CONSTRAINT fk_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
) ENGINE = InnoDb;