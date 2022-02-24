/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
12. Realizar un programa que pida 2 veces la contraseña. En caso que no sean iguales mostrar un mensaje: "Las contraseña introducidas no son iguales" (recuerda utilizar el operador ==)
*/
var pass1 = prompt("Dime tu contraseña");
var pass2 = prompt("Dime tu contraseña");
if(pass1 != pass2){
    alert("No son iguales");
}else{
    alert("Son iguales");
}