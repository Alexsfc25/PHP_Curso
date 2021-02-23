/*
 21. Obtener los nombres y ciudades de los clientes con encargos de 3 unidades en adelante
 */
SELECT NOMBRE,
        CIUDAD
FROM CLIENTES
WHERE ID IN(
                SELECT CLIENTE_ID
                FROM ENCARGOS
                WHERE CANTIDAD >= 3
        );