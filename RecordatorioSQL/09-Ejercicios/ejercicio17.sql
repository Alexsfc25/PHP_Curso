/*
 17.Obtener listado con los encargos realizados por el cliente 'Fruteria Anita' 
 */
SELECT C.NOMBRE,
        CO.MODELO,
        E.CANTIDAD,
        E.FECHA
FROM ENCARGOS E
        INNER JOIN CLIENTES C ON E.CLIENTE_ID = C.ID
        INNER JOIN COCHES CO ON E.COCHE_ID = CO.ID
WHERE CLIENTE_ID IN(
                SELECT ID
                FROM CLIENTES
                WHERE NOMBRE = 'FRUTERIA ANITA'
        );