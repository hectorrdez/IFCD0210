/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
38. Escriba un programa que pida primero dos números enteros (mínimo y máximo) y que después pida números enteros situados entre ellos. El programa terminará cuando se escriba un número que no esté comprendido entre los dos valores iniciales. El programa termina escribiendo la cantidad de números escritos.
*/
var min = parseInt(prompt("MINIMO"));
var max = parseInt(prompt("MAXIMO"));
var veces = 0;
do{
    var num = parseInt(prompt("dime un numero"));
    veces++;
}while(num > min && num < max);
document.write(veces);
