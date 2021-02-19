/*
 Se pueden definir como una consulta almacenada en la base de datos que se utiliza como una tabla virtual
 No almacenan datos sino que utilizan asociaciones y los datos originales de las tablas , de forma que siempre se
 mantiene actualizada
 */
-- CREAR VISTAS
CREATE VIEW ENTRADAS_NOMBRES AS
SELECT U.EMAIL,
    COUNT(E.ID)
FROM USUARIOS U
    INNER JOIN ENTRADAS E ON U.ID = E.USUARIO_ID
GROUP BY U.ID;
--VER CONTENIDO DE LA VISTA 
SELECT *
FROM ENTRADAS_NOMBRES;
--ELIMINAR VISTA 
DROP VIEW ENTRADAS_NOMBRES;