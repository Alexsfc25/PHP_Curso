# Renombrar tabla #
ALTER TABLE usuarios
    RENAME TO usuarios_rename;
# Cambiar nombre de una columna#
ALTER TABLE usuarios_rename CHANGE apellido apellidos VARCHAR(100) NULL;
# Modificar columna sin cambiar nombre #
ALTER TABLE usuarios_rename
MODIFY apellidos char(50) NOT NULL;
# Añadir columna#
ALTER TABLE usuarios_rename
ADD website VARCHAR(100) NULL;
# Añadir restriccion a columna#
ALTER TABLE usuarios_rename
ADD CONSTRAINT uq_email UNIQUE(email);
#Borrar una columna#
ALTER TABLE usuarios_rename DROP website;