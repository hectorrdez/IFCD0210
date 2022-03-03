/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
9. Crear una función que muestre un saludo por pantalla. La función recibirá por pantalla el nombre y mostrará el texto “Hola XXXX” : muestra el resultado con un alert dentro de la función.
*/
function saludoPersonalizado(nombre){
    alert(nombre);
}
let nombre = prompt("dime tu nombre");
saludoPersonalizado(nombre);