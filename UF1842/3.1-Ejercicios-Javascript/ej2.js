/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
2. Hacer un programa donde se introduzca la hora en formato de 0 a 24 y el programa responda con Buenos días, Buenas tardes y Buenas noches, con switch.
*/
var hora = parseInt(prompt("dime la hora"));
switch(true){
    case hora < 0 || hora > 24:
        alert("Hora incorrecta");
        break;
    case hora < 6 || hora > 20:
        alert("Buenas noches");
        break;
    case hora >= 6 && hora < 12:
        alert("Buenos dias");
        break;
    default:
        alert("Buenas tardes");
        break;
}