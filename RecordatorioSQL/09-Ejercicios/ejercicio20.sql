/*
 20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo
 */
SELECT *
FROM GRUPOS
WHERE ID =(
                SELECT GRUPO_ID
                FROM VENDEDORES
                ORDER BY SUELDO DESC
                LIMIT 1
        );
SELECT *
FROM GRUPOS
WHERE ID IN(
                SELECT GRUPO_ID
                FROM VENDEDORES
                WHERE SUELDO =(
                                SELECT MAX(SUELDO)
                                FROM VENDEDORES
                        )
        );