/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
34. Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo
*/
var numero = 0;
var resultado = 0;
var veces = 0;
do{
    resultado = resultado + numero;
    numero = parseInt(prompt("Introduce un numero"));
    if(numero >= 0){
        veces++;
    }
}while(numero >= 0)
document.write((resultado/veces));