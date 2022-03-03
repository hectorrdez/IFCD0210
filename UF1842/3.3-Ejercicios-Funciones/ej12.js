/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
12. Realizar un programa que, mediante una función denominada permuta, implemente la permutación de los valores de dos variables enteras que se rellenaron en la función principal.
*/
let permuta = Array(2);
function permutar(numero1, numero2){
    permuta = [num2, num1];
    return permuta;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
document.write(`numeros ${num1} y ${num2} <br>`);
permutar(num1, num2);
document.write(permuta);