/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
17. Realiza un programa que muestre en pantalla los números IMPARES del 1 al 100 usando un bucle For. (los números impares no son divisibles entre 2 → número % 2 != 0)
*/
for(var i = 0; i <= 100; i++){
    if((i%2)!=0) document.write(i+"<br>");
}