/*
 25.Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulados
 */
SELECT CL.NOMBRE,
        SUM(CO.PRECIO * E.CANTIDAD) AS 'IMPORTE'
FROM ENCARGOS E
        INNER JOIN COCHES CO ON E.COCHE_ID = CO.ID
        INNER JOIN CLIENTES CL ON E.CLIENTE_ID = CL.ID
GROUP BY E.CLIENTE_ID
ORDER BY 2;