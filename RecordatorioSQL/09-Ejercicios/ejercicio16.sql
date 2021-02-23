/*
 15. Mostrar listado de clientes atendidos por el vendedor 'Ernesto López'
 */
SELECT *
FROM CLIENTES
WHERE VENDEDOR_ID IN(
        SELECT ID
        FROM VENDEDORES
        WHERE NOMBRE = 'Ernesto'
            AND APELLIDOS='López'
    );