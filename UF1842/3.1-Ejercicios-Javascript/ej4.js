/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
4. Hacer un programa que tome la edad y diga si es un niño, un adolescente, un adulto o una persona mayor, con switch.
*/
var edad = parseInt(prompt("Dime tu edad"));
switch(true){
    case edad < 0:
        alert("Imposible");
        break;
    case edad < 13:
        alert("Eres un niño");
        break;
    case edad < 18:
        alert("Eres un adolescente");
        break;
    case edad < 60:
        alert("Eres un adulto");
        break;
    default:
        alert("Eres una persona mayor");
        break;
}