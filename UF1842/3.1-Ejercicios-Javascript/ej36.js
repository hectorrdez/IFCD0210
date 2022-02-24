/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
36. Escriba un programa que pida números enteros mientras sean cada vez más grande
*/
var num1 = 0;
do{
    if(num2 > num1){
        num1 = num2;
    }
    var num2 = parseInt(prompt("dime un numero"));
}while(num2 > num1);