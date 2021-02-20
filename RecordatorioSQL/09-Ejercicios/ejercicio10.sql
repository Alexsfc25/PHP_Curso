/*
 Visualizar los apellidos de los vendedores ,su fecha y su número de grupo ,ordenado por fecha descendente,
 mostrar los 4 últimos  
 
 */
 SELECT APELLIDOS,
    FECHA_ALTA,
    GRUPO_ID
FROM VENDEDORES
ORDER BY FECHA_ALTA DESC
LIMIT 5,8;