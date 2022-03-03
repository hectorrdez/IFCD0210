/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
4. Crear una función llamada “suma” que reciba 2 parámetros y los sume: muestra el resultado con un alert dentro de la función.
*/
function suma(num1, num2){
    return num1+num2;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
alert(suma(num1,num2));