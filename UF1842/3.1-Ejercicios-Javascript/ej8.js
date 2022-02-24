/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
8. Escribe un programa que pida 3 números y escriba en la pantalla el mayor de los tres.
*/
var i = 0;
var num2 = 0;
do{
    var num1 = parseInt(prompt("Dime un numero"));
    if(num1 > num2) num2 = num1;
    i++;
}while(i != 3);