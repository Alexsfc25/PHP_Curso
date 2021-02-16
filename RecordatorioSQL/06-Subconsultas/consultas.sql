/*
 Son consultas que se ejecutan dentro de otras.
 Consiste en utilizar los resultados de la subconsultas para operar en la consulta principal
 */
#Sacar usuarios con entradas
SELECT *
FROM USUARIOS
WHERE ID IN (
        SELECT USUARIO_ID
        FROM ENTRADAS
    );
SELECT *
FROM USUARIOS
WHERE ID NOT IN (
        SELECT USUARIO_ID #llave foranea relacionada con la tabla entradas
        FROM ENTRADAS
    );
#Sacar los usuarios que tengan alguna que en su titulo contenga GTA
SELECT NOMBRE,
    APELLIDOS
FROM USUARIOS
WHERE ID IN (
        SELECT USUARIO_ID
        FROM ENTRADAS
        WHERE TITULO LIKE '%GTA%'
    );
#sacar todas las entradas de la categoria acción utilizando su nombre
SELECT *
FROM ENTRADAS
WHERE CATEGORIA_ID IN(
        SELECT ID
        FROM CATEGORIAS
        WHERE NOMBRE = 'ACCIÓN'
    );
#Mostrar las categorias con mas de 4 entradas
SELECT NOMBRE
FROM CATEGORIAS
WHERE ID IN (
        SELECT CATEGORIA_ID
        FROM ENTRADAS
        GROUP BY CATEGORIA_ID
        HAVING COUNT(CATEGORIA_ID) >= 4
    );
#Mostrar los usuarios que crearon una entrada un martes 
SELECT *
FROM USUARIOS
WHERE ID IN (
        SELECT USUARIO_ID
        FROM ENTRADAS
        WHERE DAYOFWEEK(FECHA) = 2
    );
#Mostrar el nombre del usuario que tenga mas entradas
SELECT NOMBRE
FROM USUARIOS
WHERE ID =(
        SELECT usuario_id
        FROM entradas
        GROUP BY usuario_id
        ORDER BY COUNT(id) DESC
        LIMIT 1
    );
#Mostrar las categorias sin entradas
SELECT *
FROM CATEGORIAS
WHERE ID NOT IN(
        SELECT CATEGORIA_ID
        FROM ENTRADAS GROUP BY CATEGORIA_ID
    );