/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
18. Crea una función que reciba como parámetro un array de 5 posiciones, dentro de la función rellena el array con números aleatorios y devuelve el array para finalmente imprimir por consola. Nota: la impresión debe hacerse fuera de la función.
*/
function rellenaRandom(array){
    for(let i = 0; i < array.length; i++){
        array[i] = parseInt(Math.random()*1000 +1);
    }
    return array;
}
let array = Array(5);
rellenaRandom(array);
document.write(array);