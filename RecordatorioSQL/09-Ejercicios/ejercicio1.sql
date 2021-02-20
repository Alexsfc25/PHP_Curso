-- 1.Diseñar y crear la base de datos de un concesionario
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
CREATE TABLE coches(
    id INT(10) AUTO_INCREMENT NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(50),
    precio INT(20) NOT NULL,
    stock INT(255) NOT NULL,
    CONSTRAINT pk_coche PRIMARY KEY(id)
) ENGINE = INNODB;
CREATE TABLE grupos(
    id INT(10) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100),
    CONSTRAINT pk_grupo PRIMARY KEY (id)
) ENGINE = INNODB;
CREATE TABLE vendedores(
    id INT(10) AUTO_INCREMENT NOT NULL,
    grupo_id INT(10) NOT NULL,
    jefe INT(10),
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR (150),
    cargo VARCHAR(50),
    fecha_alta DATE,
    sueldo FLOAT(20, 2),
    comision FLOAT(10, 2),
    CONSTRAINT pk_vendedor PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
) ENGINE = INNODB;
CREATE TABLE clientes(
    id INT(10) AUTO_INCREMENT NOT NULL,
    vendedor_id INT(10) NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    ciudad VARCHAR(100),
    gastado FLOAT(50, 2),
    CONSTRAINT pk_cliente PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
) ENGINE = INNODB;
CREATE TABLE encargos(
    id INT(10) AUTO_INCREMENT NOT NULL,
    coche_id INT(10) NOT NULL,
    cliente_id INT(10) NOT NULL,
    cantidad INT(100),
    fecha DATE,
    CONSTRAINT pk_encargos PRIMARY KEY (id),
    CONSTRAINT fk_encargos_coche FOREIGN KEY(coche_id) REFERENCES coches(id),
    CONSTRAINT fk_encargos_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id)
) ENGINE = INNODB;
-- Rellenar la base de datos con información
--Coches 
INSERT INTO coches
VALUES(NULL, 'Renault Clio', 'Renault', 120000, 13);
INSERT INTO coches
VALUES(NULL, 'Seat Panda', 'Seat', 100000, 15);
INSERT INTO coches
VALUES(
        NULL,
        'Mercedes Ranchera',
        'Mercedes Benz',
        420000,
        8
    );
INSERT INTO coches
VALUES(NULL, 'Porche Cayene', 'Porche', 500000, 18);
INSERT INTO coches
VALUES(
        NULL,
        'Lamborghini Aventador',
        'Lamborghini',
        1500000,
        7
    );
INSERT INTO coches
VALUES(NULL, 'Ferrari Spider', 'Ferrari', 2000000, 3);
--Grupos
INSERT INTO grupos
VALUES(NULL, 'Vendedores A', 'CDMX');
INSERT INTO grupos
VALUES(NULL, 'Vendedores B', 'CDMX');
INSERT INTO grupos
VALUES(NULL, 'Directores Mecánicos', 'Monterrey');
INSERT INTO grupos
VALUES(NULL, 'Vendedores A', 'Guadalajara');
INSERT INTO grupos
VALUES(NULL, 'Vendedores B', 'Guadalajara');
INSERT INTO grupos
VALUES(NULL, 'Vendedores C', 'Puebla');
INSERT INTO grupos
VALUES(NULL, 'Vendedores A', 'Colima');
INSERT INTO grupos
VALUES(NULL, 'Vendedores B', 'Pachuca');
INSERT INTO grupos
VALUES(NULL, 'Vendedores C', 'Yucatan');
--Vendedores
INSERT INTO VENDEDORES
VALUES(
        NULL,
        1,
        null,
        'Ernesto',
        'López',
        'Responsable de Tienda',
        CURDATE(),
        50000,
        4
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        1,
        1,
        'Pedro',
        'Ramirez',
        'Ayudante en Tienda',
        CURDATE(),
        20000,
        2
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        2,
        null,
        'Brandon',
        'Sánchez',
        'Responsable de Tienda',
        CURDATE(),
        50000,
        4
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        2,
        3,
        'Mariana',
        'Gómez',
        'Ayudante en Tienda',
        CURDATE(),
        23000,
        2
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        3,
        null,
        'Raul',
        'Martinez',
        'Mecánico Jefe',
        CURDATE(),
        70000,
        3
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        4,
        null,
        'Antonio',
        'Morales',
        'Vendedor de recambios',
        CURDATE(),
        25000,
        10
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        5,
        null,
        'Fernanda',
        'Aguilar',
        'Vendedor Experto',
        CURDATE(),
        26000,
        20
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        6,
        null,
        'Gladis',
        'Jimenez',
        'Ejecutivo de Cuentas',
        CURDATE(),
        50000,
        6
    );
INSERT INTO VENDEDORES
VALUES(
        NULL,
        6,
        8,
        'Mario',
        'Lara',
        'Ayudante en Tienda',
        CURDATE(),
        18000,
        6
    );
--Clientes
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'Construcciones Díaz INC.',
        'GAM',
        120000 * 3,
        CURDATE()
    );
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'Fruteria Anita',
        'Azcapotzalco',
        100000 * 4,
        CURDATE()
    );
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'Imprenta Ramirez',
        'Iztacalco',
        420000,
        CURDATE()
    );
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'Colchones Inc',
        'Tlalpan',
        420000 * 3,
        CURDATE()
    );
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'Bar Doberman',
        'GAM',
        1500000,
        CURDATE()
    );
INSERT INTO clientes
VALUES(
        NULL,
        1,
        'PC Mexico',
        'Coyoacán',
        2000000,
        CURDATE()
    );
#Encargos
INSERT INTO encargos
VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos
VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos
VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos
VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos
VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos
VALUES(NULL, 6, 6, 1, CURDATE());