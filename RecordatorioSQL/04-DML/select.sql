# Consulta de registros de una tabla #
SELECT nombre,
    apellidos,
    email
FROM usuarios;
#Consulta de todos los campos de una tabla
SELECT *
FROM usuarios;
# OPERADORES ARITMETICOS#
SELECT email,
    (4 + 7) AS 'operación'
FROM usuarios
ORDER BY id DESC;
SELECT email,
    (id + 7) AS 'operación'
FROM usuarios
ORDER BY id ASC;
SELECT email,
    (id - 7) AS 'operación'
FROM usuarios
ORDER BY id ASC;
SELECT nombre,
    (2 * 7) AS 'operación'
FROM usuarios
ORDER BY id ASC;
SELECT nombre,
    (2 % 7) AS 'operación'
FROM usuarios
ORDER BY id ASC;
# Funciones Matemáticas#
SELECT ABS(-12) AS 'OPERACIÓN' #absoluto
FROM usuarios;
#redondeo hacia arriba
SELECT CEIL(12.55) AS 'OPERACIÓN';
#redondeo hacia ABAJO
SELECT FLOOR(12.55) AS 'OPERACIÓN';
#Funcion PI
SELECT PI() AS 'OPERACIÓN';
#Funcion RAND para núnmeros aleatorios
SELECT RAND() AS 'OPERACIÓN';
#Funcion ROUND PARA REDONDEAR NUMEROS CON CIERTAS DECIMALES
SELECT ROUND(112.43123, 3) AS 'OPERACIÓN';
#Funcion RAIZ
SELECT SQRT(4) AS 'OPERACIÓN';
#Funcion TRUNCATE Elimina decimales del número dado
SELECT TRUNCATE(4.1234, 2) AS 'OPERACIÓN';
#Transformar texto a mayusculas
SELECT UPPER(nombre)
FROM usuarios;
#Transformar texto a minusculas
SELECT LOWER(nombre)
FROM usuarios;
#Concatenar textos
SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre Completo'
FROM usuarios;
#Combinar Funciones
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Nombre Completo en Mayusculas'
FROM usuarios;
#Longitud de la cadena de texto
SELECT email,
    nombre,
    apellidos,
    LENGTH(CONCAT(nombre, ' ', apellidos))
FROM usuarios;
#Eliminar espacios finales de un texto
SELECT TRIM(CONCAT('      ', nombre, ' ', apellidos, '    ')) AS 'FUNCION CONCAT'
FROM usuarios;
# Funcion que retorna la fecha actual
SELECT email,
    fecha,
    CURDATE() AS 'Fecha Actual'
FROM usuarios;
# Funcion que retorna la diferencia entre fechas en dias
SELECT email,
    DATEDIFF(fecha, CURDATE()) AS 'Diferencia de fechas'
FROM usuarios;
# Funcion que retorna el nombre del día
SELECT DAYNAME(fecha) AS 'Nombre del día '
FROM usuarios;
# Funcion que retorna el número del mes
SELECT DAYOFMONTH(fecha) AS 'Número del día '
FROM usuarios;
# Funcion que retorna el DIA DE LA SEMANA
SELECT DAYOFWEEK(fecha) AS 'Número de la semana '
FROM usuarios;
# Funcion que retorna el DIA DEL AÑO
SELECT DAYOFYEAR(fecha) AS 'Número del año '
FROM usuarios;
# Funcion que retorna el mes
SELECT MONTH(fecha) AS 'Mes '
FROM usuarios;
# Funcion que retorna el AÑO
SELECT YEAR(fecha) AS 'Año'
FROM usuarios;
# Funcion que retorna la hora actual
SELECT CURTIME() AS 'Hora actual';
# Funcion que retorna la fecha del sistema
SELECT SYSDATE() AS 'Fecha Sistema';
# Funcion que formatea la fecha
SELECT DATE_FORMAT(fecha, '%d.%m.%Y') AS 'FORMATEO DE FECHA'
FROM usuarios;
#Función que retorna si un valor es nulo
SELECT nombre,
    ISNULL(apellidos)
FROM usuarios;
#Función que retorna si un campo es igual a otro
SELECT STRCMP('HOLA', 'HOL1A');
#Función que retorna la versión de mysql
SELECT VERSION();
#Función que retorna el usuario
SELECT USER();
#Función que retorna valores diferentes en la tabla
SELECT DISTINCT USER();
#Función que retorna EL NOMBRE DE LA BASE DE DATOS
SELECT DISTINCT DATABASE();
#Función que retorna un valor si el campo es nulo
SELECT IFNULL(apellidos, ' este campo esta vacio')
FROM usuarios;