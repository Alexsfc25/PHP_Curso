/*
 29.Crear una vista llamada vendedores A que incluirá todos los vendedores 
 del grupo que se llame "Vendedores A"
 */
CREATE VIEW VENDEDORES_A AS
SELECT *
FROM VENDEDORES V
WHERE V.GRUPO_ID IN(
                SELECT ID
                FROM GRUPOS G
                WHERE G.NOMBRE = 'Vendedores A'
        );
CREATE VIEW VENDEDORES_A AS
SELECT V.NOMBRE
FROM VENDEDORES V
        INNER JOIN GRUPOS G ON G.ID = V.GRUPO_ID
WHERE G.NOMBRE = 'Vendedores A';