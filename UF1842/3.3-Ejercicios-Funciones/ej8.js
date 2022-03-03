/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
8. Crear una función que permita calcular el cubo de un número: muestra el resultado con un alert dentro de la función.
*/
function cube(num){
    return num * num * num;
}
let num = parseInt(prompt("dime un numero"));
alert(cube(num));