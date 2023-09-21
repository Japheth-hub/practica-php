/* 
Modificar la comision de los vendedores y ponerla al 2% cuando ganen mas de $13,000
sin hacer cambio en los gerentes
 */

UPDATE vendedores SET comision=2 WHERE cargo='vendedor' AND sueldo>13000;
