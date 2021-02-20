/*
 13.- Sacar la media de sueldos entre todos los vendedores por grupo
 */
SELECT CEIL(AVG(V.SUELDO)) AS 'MEDIA SALARIAL',
    G.NOMBRE
FROM VENDEDORES V
    INNER JOIN GRUPOS G ON V.GRUPO_ID = G.ID
GROUP BY GRUPO_ID;