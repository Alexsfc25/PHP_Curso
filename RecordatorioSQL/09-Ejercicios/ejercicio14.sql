/*
 14- Visualizar las unidades totales vendidas de cada coche a cada cliente.
 Mostrando el nombre del coche ,número de cliente y la suma de unidades
 */
SELECT C.MODELO,
    CL.NOMBRE as 'CLiente',
    SUM(E.CANTIDAD) as 'Cantidad vendida'
FROM ENCARGOS E
    INNER JOIN COCHES C ON E.COCHE_ID = C.ID
    INNER JOIN CLIENTES CL ON E.CLIENTE_ID = CL.ID
GROUP BY E.COCHE_ID;    