/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
46. Rellene un array con 5 números introducidos por teclado, luego copia los números de un array a otro array diferente multiplicados por 2 y muestre el segundo array
*/
var array = [];
var array2 = [];
for(var i = 0; i < 5; i++){
    array[i] = parseInt(prompt("dime un numero"));
}
for(var i = 0; i < array.length; i++){
    array2[i] = array[i] * 2;
}
document.write(array2);