/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
27. Realizar un programa que pregunte hasta 10 veces cual es la capital de España, si el usuario escribe bien la solución finalizar el programa y escribir por pantalla “ENHORABUENA, ¡HAS ACERTADO!”. Si no acierta pasados 10 intentos escribir por pantalla “LO SIENTO HAS PERDIDO”.
*/
var i = 0;
do{
    var respuesta = prompt("capital de españa");
    if(respuesta == "madrid" || respuesta == "Madrid" || respuesta == "MADRID"){
        break;
    }
    i++;
}while(i != 10);
if(i == 9){
    alert("ENHORABUENA");
}else {
    alert("LO SIENTO HAS PERDIDO");
}