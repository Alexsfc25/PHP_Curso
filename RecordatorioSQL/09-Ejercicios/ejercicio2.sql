/*Modificar la comisión de los vendedores y ponerla al 0.5% 
 cuando ganan más de 50000*/
UPDATE VENDEDORES
SET COMISION=0.5
WHERE SUELDO > 50000;
