/*
 27.Visualizar los nombres de los clientes y la cantidad de encargos realizados , incluyendo 
 los que no hayan realizado cargos
 */
INSERT INTO CLIENTES
VALUES(
                NULL,
                5,
                'Tienda Organica INC',
                'Álvaro Obregón',
                0,
                CURDATE()
        );
SELECT C.NOMBRE,
        COUNT(E.ID) AS 'ENCARGOS'
FROM CLIENTES C
        LEFT JOIN ENCARGOS E ON E.CLIENTE_ID = C.ID
GROUP BY E.CLIENTE_ID;