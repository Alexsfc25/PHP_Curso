/*Mostrar todos los vedendores con su nombre y el número de dias que llevan en el concesionario*/
SELECT CONCAT(NOMBRE, ' ', APELLIDOS) as 'Nombre',
    DATEDIFF(CURDATE(), FECHA_ALTA) as 'Días'
FROM vendedores;