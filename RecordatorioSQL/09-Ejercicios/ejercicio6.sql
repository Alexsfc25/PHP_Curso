/*
 6.-Visualizar el nombre y los apellidos de la vendedores en una misma columna,su fecha de registro
 y el día de la semana que se registrarón
 */
SELECT CONCAT(NOMBRE, ' ', apellidos) AS 'NOMBRE',
    FECHA_ALTA,
    DAYNAME(FECHA_ALTA) FROM VENDEDORES;