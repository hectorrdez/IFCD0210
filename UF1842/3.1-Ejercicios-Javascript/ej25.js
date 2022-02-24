/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
25.Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura:

         1

          121

          12321

          1234321
*/
var num = parseInt(prompt("dime un numero"));
for(var i = 1; i <= num; i++){
    for(var j = 1; j <= i; j++){
        document.write(j);
    }
    for(var k = (i-1); k > 0; k--){
        document.write(k);
    }
    document.write("<br>");
}