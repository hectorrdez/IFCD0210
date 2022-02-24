/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
47. Rellene un array con 20 números (del 1 al 20) y luego busque un número concreto (introducido por pantalla), devuelve que posición ocupa el número en el array.
*/
var num = [0];
for(var i = 0; i <= 20; i++){
    num[i] = i*2;
}
var pos = 0;
var busqueda = parseInt(prompt("dime numero"));
for(var j = 0; j < num.length; j++){
    pos = j;
    if(num[j] == busqueda){
        break;
    }
}
document.write(pos);