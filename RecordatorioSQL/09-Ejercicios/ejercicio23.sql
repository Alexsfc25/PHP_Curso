/*
 23.Listar todos los encargos realizados con la marca del coche y el nombre del cliente
 */
SELECT E.ID,
        CO.MODELO,
        C.NOMBRE
FROM ENCARGOS E
        INNER JOIN COCHES CO ON CO.ID = E.COCHE_ID
        INNER JOIN CLIENTES C ON C.ID = E.CLIENTE_ID;