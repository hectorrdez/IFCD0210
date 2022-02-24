/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
49. Rellena una array con 10 números introducidos por teclado y devuelve la suma de todos los números.
*/
var num = [0];
for(var i = 0; i < 10; i++){
    num[i] = parseInt(prompt("dime un numero"));
    console.log(num[i]);
}
var resultado = 0;
for (j in num){
    resultado = num[j] + resultado;
} 
document.write(resultado);
