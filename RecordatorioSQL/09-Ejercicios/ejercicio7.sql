/**Mostrar el nombre y el salario de los vendedores con cargo de 'Ayudante en tienda'*/
SELECT NOMBRE,
    SUELDO
FROM vendedores
WHERE CARGO = 'Ayudante en tienda';