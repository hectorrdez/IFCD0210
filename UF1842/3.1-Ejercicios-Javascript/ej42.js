/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
42. Haz un programa que imprima los múltiplos de 3 hasta 100 con un bucle while
*/
var cantidad = 3;
do{
    if((cantidad%3) == 0){
        document.write(cantidad+"<br>");
    }
    cantidad++;
}while(cantidad < 100);