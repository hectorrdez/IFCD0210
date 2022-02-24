/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
13. Se insertan tres valores por teclado, si todos son iguales se imprime la suma del primero con el segundo y a este resultado se lo multiplica por el tercero (tener en cuenta que puede haber tres condiciones simples). Si no son igual se muestra en pantalla “Los números no son iguales”.
*/
var valor1 = parseInt(prompt("Dime un valor"));
var valor2 = parseInt(prompt("Dime un valor"));
var valor3 = parseInt(prompt("Dime un valor"));
if(valor1 == valor2 && valor2 == valor3){
    alert(valor1*2*valor3);
}else{
    alert("Los numeros no son iguales");
}