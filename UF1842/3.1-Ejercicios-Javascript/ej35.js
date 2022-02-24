/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
35. Escriba un programa que pida dos números enteros. El programa pedirá de nuevo el segundo número mientras no sea mayor que el primero. El programa terminará escribiendo los dos números.
*/
var num1 = parseInt(prompt("dime un numero"));
var num2 = 0;
var num3 = 0;
do {
    num2 = parseInt(prompt("dime un numero"));
    if(num2 > num1){
        num3 = num2;
    } 
} while (num2 > num1);
document.write(num1+ "<br> "+num3);