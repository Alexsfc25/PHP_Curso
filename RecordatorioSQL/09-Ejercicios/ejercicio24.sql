/*
 24.Listar los encargos con el nombre del coche ,el nombre del cliente y el nombre de la ciudad 
 , pero cuando unicamente sean  de la GAM
 */
SELECT E.ID,
        CO.MODELO,
        C.NOMBRE,
        C.CIUDAD
FROM ENCARGOS E
        INNER JOIN COCHES CO ON CO.ID = E.COCHE_ID
        INNER JOIN CLIENTES C ON C.ID = E.CLIENTE_ID
WHERE CIUDAD = "GAM";