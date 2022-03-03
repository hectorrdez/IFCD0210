/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
6. Crear una función llamada “multiplica” que reciba 2 parámetros y los multiplique: muestra el resultado con un alert dentro de la función.
*/
function multiplica(num1, num2){
    return num1 * num2;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
alert(multiplica(num1,num2));