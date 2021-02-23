/*
 22.Mostrar listado de clientes (número de cliente y el nombre ) 
 mostrar tambien el número de vendedor y su nombre.
 */
SELECT CL.ID,
        CL.NOMBRE,
        V.ID,
        CONCAT(V.NOMBRE, ' ', V.APELLIDOS) AS 'VENDEDOR'
FROM CLIENTES CL
        INNER JOIN VENDEDORES V ON CL.VENDEDOR_ID = V.ID;
SELECT CL.ID,
        CL.NOMBRE,
        V.ID,
        CONCAT(V.NOMBRE, ' ', V.APELLIDOS) AS 'VENDEDOR'
FROM CLIENTES CL,
        VENDEDORES V
WHERE CL.VENDEDOR_ID = V.ID;