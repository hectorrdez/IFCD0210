/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
9. Escribe un programa que pida un número y diga si es divisible por 2 

(los números pares son divisibles entre 2 → número % 2 == 0)
*/
var num1 = parseInt(prompt("Dime un numero"));
if((num1 % 2) == 0){
    alert("Es divisible por 2");
}else{
    alert("No es divisible por 2");
}