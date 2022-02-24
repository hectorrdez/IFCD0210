/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
26. Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura:

                1

              21

            321

          4321

        54321
*/
var num = parseInt(prompt("dime un numero"));
for(var i = 1; i <= num; i++){
    for(var j = (num-i); j > 0; j--){
        document.write("&nbsp;&nbsp;");
    }
    for(var k = i; k > 0; k--){
        document.write(k);
    }
    document.write("<br>");
}