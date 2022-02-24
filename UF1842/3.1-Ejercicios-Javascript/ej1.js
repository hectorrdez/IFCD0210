/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
1. Hacer un programa donde se introduzca la hora en formato de 0 a 24 y el programa responda con Buenos días, Buenas tardes y Buenas noches, con if else. Si el número es mayor que 24 o menor que 0, mostrará un mensaje de error “Hora incorrecta”.
*/
var hora = parseInt(prompt("dime la hora"));
if(hora > 24 || hora < 0){
    alert("Hora incorrecta");
} else if(hora < 6 || hora >= 20){
    alert("Buenas noches");
} else if(hora >= 6 && hora < 12){
    alert("Buenos dias");
} else if(hora >= 12 && hora < 20){
    alert("Buenas tardes");
}