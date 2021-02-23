/*
 18.Listar los clientes que han echo algun cargo del coche "Mercedes Ranchera"
 */
SELECT *
FROM CLIENTES CL
WHERE CL.ID IN(
                SELECT E.CLIENTE_ID
                FROM ENCARGOS E
                WHERE E.COCHE_ID IN(
                                SELECT ID
                                FROM COCHES
                                WHERE MODELO = 'Mercedes Ranchera'
                        )
        );