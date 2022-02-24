/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
48. Rellena una array con 10 números introducidos por teclado y devuelve por pantalla cual es el menor y cual es mayor de ellos. Adicionalmente debes decir cuántas veces se encuentra en el array ese número.
*/
var num = [];
for(var i = 0; i < 10; i++){
    num[i] = parseInt(prompt("dime un numero"));
    console.log(num[i]);
}
var max = num[0];
var min = num[0];
for(var j = 0; j < num.length; j++){
    if(num[j] > max){
        max = num[j];
    }else if(num[j] < min){
        min = num[j];
    }
}
var nmax = 0;
var nmin = 0;
for(var k = 0; k < num.length; k++){
    if(min == num[k]){
        nmax++;
    }else if(max == num[k]){
        nmin++;
    }
}
document.write("maximo: "+max+"; min: "+min+"<br>");
document.write("veces maximo: "+nmax+"; veces min: " +nmin);