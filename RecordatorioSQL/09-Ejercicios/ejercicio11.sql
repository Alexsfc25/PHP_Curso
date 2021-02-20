/*
 11.Visualizar todos los cargos y el número de vendedores que hay en cada cargo
 */
 SELECT cargo,
    COUNT(ID)
FROM VENDEDORES GROUP BY (CARGO);