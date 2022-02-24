/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
14. Se ingresan por teclado tres números, si todos los valores ingresados son menores a 10, imprimir en la página la leyenda ' Todos los números son menores a diez'.
*/
var num1 = parseInt(prompt("Dime un numero"));
var num2 = parseInt(prompt("Dime un numero"));
var num3 = parseInt(prompt("Dime un numero"));
if(num1 < 10 && num2 < 10 && num3 < 10){
    alert("Todos los numeros son menores que 10");
}else{
    alert("No todos son menores que 10");
}