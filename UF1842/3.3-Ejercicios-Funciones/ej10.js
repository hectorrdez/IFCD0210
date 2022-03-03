/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
10. Crear una función que muestre por pantalla los números del 1 hasta el número que reciba como parámetro: muestra el resultado con document.write o console.log
*/
function cuenta(parada){
    for(let i = 1; i <= parada; i++){
        document.write(i+"<br>");
    }
}
let parada = parseInt(prompt("dime la parada"));
cuenta(parada);