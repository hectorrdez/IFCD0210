/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
45. Rellena una array con 10 números introducidos por teclado y devuelve por pantalla cual es el menor y cual es mayor de ellos.
*/
var enter = [0];
var min = 0;
var max = 0;
for(var i = 0; i < 10; i++){
    enter[i] = parseInt(prompt("dime un numero "+i));
}
for(var i = enter.length; i > 0; i--){
    if(enter[i] > max){
        max = enter[i];
    }else if(enter[i] < min){
        min = enter[i];
    }
}
document.write("minimo: "+min+"<br>");
document.write("maximo: "+max);