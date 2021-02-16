#Consulta con una condición
SELECT *
FROM usuarios
WHERE email = 'ale@mail.com';
/*
 Operadores de comparación
 Igual =
 Distinto !=
 Menor <
 Mayor >
 Menor Igual <=
 Mayor Igual >=
 Entre BETWEEN A AND B
 En      IN
 Es nulo IS NULL
 NO NULO IS NOT NULL
 COMO      LIKE
 No es como NOT LIKE
 */
/*
 Operadores lógicos
 O  OR
 Y  AND
 No NOT
 
 */
/*
 Cualquier cantidad de caracteres: %
 caracter desconocido: _
 
 */
#EJEMPLOS
#1. Mostrar nombre y apellidos de todos los usuarios registrados en 2019
SELECT nombre,
    apellidos
FROM usuarios
WHERE YEAR(fecha) = 2019;
#2. Mostrar nombre y apellidos de todos los usuarios que no se registraron en 2020
SELECT nombre,
    apellidos
FROM usuarios
WHERE YEAR(fecha) != 2020
    OR ISNULL(fecha);
#3.Mostrar el email de los usuarios cuyo apellido  contenga la letra A y que la constraseña sea 12345
SELECT email
FROM usuarios
WHERE apellidos LIKE '%A%'
    AND password = 'fer123';
#4.Sacar todos los registros de la tabla usuarios cuyo año sea PAR
SELECT *
FROM usuarios
WHERE YEAR(fecha) %2 = 0;
#5.Sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de 2020
#, y mostrar el nombre en mayus
SELECT id,
    UPPER(nombre) AS 'Nombre',
    apellidos,
    email,
    fecha
FROM usuarios
WHERE LENGTH(nombre) > 4
    AND YEAR(fecha) < 2020;
#Ordenar elementos 
SELECT *
FROM usuarios
ORDER BY NOMBRE ASC;
SELECT *
FROM usuarios
ORDER BY FECHA DESC;
#Limitar la cantidad de registros que se muestran
SELECT *
FROM USUARIOS
LIMIT 1;
#Limitar rango de registros mostrados
SELECT *
FROM USUARIOS
LIMIT 1, 3;