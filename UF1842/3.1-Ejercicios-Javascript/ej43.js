/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
43. Rellene un array con los 100 primeros números enteros y los muestre en pantalla en orden ascendente.
*/
var enter = [0];
for(var i = 0; i <= 100; i++){
    enter[i] = i;
}
for(var j = 0; j < enter.length; j++){
    document.write(j+"<br>");
}
