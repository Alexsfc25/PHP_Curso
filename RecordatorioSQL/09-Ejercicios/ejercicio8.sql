/*8.- Visualizar todos los coches en cuya marca exista la letra a y cuyo modelo empiece con F*/
SELECT *
FROM COCHES
WHERE MARCA LIKE '%a%'
    AND MODELO LIKE 'F%'