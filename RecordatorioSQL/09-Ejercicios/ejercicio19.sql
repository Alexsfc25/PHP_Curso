/*
 19.Obtener los vendedores con 2 o mas clientes 
 */
SELECT *
FROM VENDEDORES
WHERE ID IN(
                SELECT VENDEDOR_ID
                FROM CLIENTES
                GROUP BY VENDEDOR_ID
                HAVING COUNT(ID) >= 2
        );