/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
11. Realiza un programa que pida 3 notas. Si la nota media de las 3 es mayor o igual a 5, mostrará un mensaje "aprobado". Si es menor que 5 mostrará "suspenso".
*/
var nota1 = parseInt(prompt("dime tu nota"));
var nota2 = parseInt(prompt("dime tu nota"));
var nota3 = parseInt(prompt("dime tu nota"));
if(((nota1+nota2+nota3)/3) >= 5){
    alert("Aprobado");
}else {
    alert("Suspenso");
}