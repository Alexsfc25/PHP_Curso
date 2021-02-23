/*
 26.Sacar los vendedores que tienen jefe y sacar el nombre del jefe
 */
SELECT CONCAT(V.NOMBRE, ' ', V.APELLIDOS) AS 'VENDEDOR',
        CONCAT(J.NOMBRE, ' ', J.APELLIDOS) AS 'JEFE'
FROM VENDEDORES V
        INNER JOIN VENDEDORES J ON J.ID = V.JEFE;