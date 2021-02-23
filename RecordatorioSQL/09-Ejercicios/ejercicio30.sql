/*
 30.Mostrar los datos del vendedor con mas antiguedad en el concesionario
 */
SELECT *
FROM VENDEDORES
ORDER BY FECHA_ALTA ASC
LIMIT 1;
/*31. Obtener EL coche con mas unidades vendidas*/
SELECT *
FROM COCHES
WHERE ID =(
                SELECT ID
                FROM ENCARGOS
                ORDER BY CANTIDAD DESC
                LIMIT 1
        );
SELECT *
FROM COCHES
WHERE ID IN(
                SELECT coche_id
                FROM ENCARGOS
                WHERE CANTIDAD IN(
                                SELECT MAX(CANTIDAD)
                                FROM ENCARGOS
                        )
        );