/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
14. Una función que reciba cinco números enteros como parámetros y muestre por pantalla el resultado de sumar los cinco números (hay que devolver el valor y mostrar el resultado fuera de la función).
*/
function suma(num1, num2, num3, num4, num5){
    return num1 + num2 + num3 + num4 + num5;
}
let num1 = parseInt(prompt("dime un numero"))
let num2 = parseInt(prompt("dime un numero"))
let num3 = parseInt(prompt("dime un numero"))
let num4 = parseInt(prompt("dime un numero"))
let num5 = parseInt(prompt("dime un numero"))
let temporal = suma(num1,num2,num3,num4,num5)*2;
document.write(temporal);