/*15. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron*/
SELECT C.NOMBRE,
    COUNT(C.ID)
FROM ENCARGOS E
    INNER JOIN CLIENTES C ON E.CLIENTE_ID = C.ID
GROUP BY (E.CLIENTE_ID) ORDER BY 2 DESC;