/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-basico-IF
*/
/*
6.Escribe un programa que pida un número, pida otro número y la operación que se desea hacer (+/-*) y escriba el resultado de sumar estos dos números.
*/
var num1 = parseInt(prompt("dime un numero"));
var num2 = parseInt(prompt("dime otro numero"));
var op = prompt("di operacion");
if(op == "+" ){
    alert(num1+num2);
}else if(op == "-"){
    alert(num1-num2);
}else if(op == "*"){
    alert(num1*num2);
}else if(op == "/"){
    alert(num1/num2);
}else{
    alert("operacion no valida");
}