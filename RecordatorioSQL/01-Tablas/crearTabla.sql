-- Principales tipos de datos
-- int(n° cifras) ENTERO
-- integer(n° cifras) ENTERO (MAX 4294967295 caracteres)
-- varchar(n° caracteres) STRING/ALFANUMERICO MAX(255 caracteres)
-- char(n° caracteres) STRING/ALFANUMERICO
-- float(n°cifras,n° decimales) DECIMAL / COMA FLOTANTE
-- date,time,timestamp
-- String mas grande
-- TEXT 65535 caracateres
-- MEDIUMTEXT 4 millones caracteres
-- LONGTEXT 16 billones de caracteres
-- Int mas grandes
-- MEDIUMINT
-- BIGINT
-- Crear BD
CREATE DATABASE nombredeBD;
-- Mostrar BDs 
show databases;
-- Usar BD
use nombreBD;
/*  Creacion de Tablas*/
CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellido VARCHAR(255) DEFAULT 'valor por default',
    email VARCHAR(100) NOT NULL,
    contrasena VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);
-- Mostrar tablas en la BD
show tables;
-- Mostrar como esta formada la tabla
desc nombreTabla;
-- Eliminar tablas
drop table nombreTabla;