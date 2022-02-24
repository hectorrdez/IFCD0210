/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
24. Escribe un programa que lea un número N e imprima una pirámide de números con N filas como en la siguiente figura:
1

12

123

1234
*/
var num = parseInt(prompt("Dime un numero"));
for(var i = 1; i <= num; i++){
    for(var j = 1; j <= i; j++){
        document.write(j);
    }
    document.write("<br>");
}