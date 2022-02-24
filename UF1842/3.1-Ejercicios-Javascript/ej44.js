/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
44. Rellene un array con los 100 primeros números enteros y los muestre en pantalla en orden descendente.
*/
var enter = [0];
for(var i = 0; i < 100; i++){
    enter[i] = i;
}
for(var j = enter.length; j >= 0; j--){
    document.write(j+"<br>");
}