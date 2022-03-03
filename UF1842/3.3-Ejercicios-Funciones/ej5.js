/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
5. Crear una función llamada “resta” que reciba 2 parámetros y los reste: muestra el resultado con un alert dentro de la función.
*/
function resta(num1, num2){
    return num1-num2;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
alert(resta(num1,num2));