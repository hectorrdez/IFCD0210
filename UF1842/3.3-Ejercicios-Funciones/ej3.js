/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
3. Crear una función que reciba un parámetro y muestre por pantalla si el número es par o impar, utilizar una función.
*/
function paroimpar(numero){
    if(numero%2 == 0) document.write("es par");
    if(numero%2 != 0) document.write("es impar");
}

let numero = parseInt(prompt("Dime un numero"));
paroimpar(numero);