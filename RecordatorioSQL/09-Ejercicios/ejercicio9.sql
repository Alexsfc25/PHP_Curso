/*
 9.Mostrar todos los vendedores del grupo número 2 ,ordenados por salario de mayor a menor
 */
SELECT *
FROM vendedores
WHERE GRUPO_ID = 2
ORDER BY SUELDO DESC;