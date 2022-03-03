/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
7. Crear una función llamada “divide” que reciba 2 parámetros y los divida: muestra el resultado con un alert dentro de la función.
*/
function divide(num1, num2) {
    return num1/num2;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
alert(divide(num1,num2));