#Consultas de agrupamiento
SELECT COUNT(TITULO) AS 'Número de entradas',
    categoria_id
FROM ENTRADAS
GROUP BY CATEGORIA_ID;
#Consultas de agrupamiento con condiciones
SELECT COUNT(TITULO) AS 'Número de entradas',
    categoria_id
FROM ENTRADAS
GROUP BY CATEGORIA_ID
HAVING COUNT(TITULO) = 2;
/*
 AVG saca la media
 COUNT Contar el número de elementos
 MAX valor máximo del grupo
 MIN Valor minimo del grupo
 SUM Suma el contenido del grupo
 */
SELECT AVG(ID) AS 'MEDIA'
FROM ENTRADAS;
SELECT MAX(ID) AS 'Último registro',
    TITULO
FROM ENTRADAS;
SELECT MIN(ID) AS 'Primer registro',
    TITULO
FROM ENTRADAS;
SELECT SUM(ID) AS 'Suma de Id',
    TITULO
FROM ENTRADAS;