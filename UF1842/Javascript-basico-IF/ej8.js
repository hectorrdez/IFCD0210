/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-basico-IF
*/
/*
8.Escribe un programa que pida 3 números y escriba en la pantalla el mayor de los tres.
*/
var i = 0;
var num2 = 0;
do{
    var num1 = parseInt(prompt("dime un num"));
    if(num1 > num2){
        num2 = num1;
    }
    i++;
}while(i != 3);
alert(num2);