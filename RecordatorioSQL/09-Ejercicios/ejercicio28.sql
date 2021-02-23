/*
 28.Mostrar todos los vendedores  y el numero de clientes . Se deben mostrar tengan o no clientes
 */
SELECT CONCAT(V.NOMBRE, ' ', V.APELLIDOS) AS 'VENDEDORES',
        COUNT(C.ID) AS 'CLIENTES'
FROM VENDEDORES V
        LEFT JOIN CLIENTES C ON C.VENDEDOR_ID = V.ID
GROUP BY V.ID;