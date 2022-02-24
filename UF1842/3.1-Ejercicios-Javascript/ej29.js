/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
29. Realiza un programa que muestre en pantalla los números PARES del 1 al 100 usando un bucle while. (los números pares son divisibles entre 2 → número % 2 == 0)
*/
var i = 0;
while(i != 100){
    if((i%2)==0){
        document.write(i+"<br>");
    }
    i++;
}