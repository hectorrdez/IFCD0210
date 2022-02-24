/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
37. Escriba un programa que pida números mientras no se escriba un número negativo. El programa terminará escribiendo la suma de los números introducidos.
*/
var num = 0;
var resultado = 0;
do{
    num = parseInt(prompt("dime un numero"));
    if(num >= 0){
        resultado = resultado + num;
    }
}while(num >= 0);
document.write(resultado);