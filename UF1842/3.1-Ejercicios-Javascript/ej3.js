/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
3. Hacer un programa que tome la edad y diga si es un niño, un adolescente, un adulto o una persona mayor, con if else.
*/
var edad = parseInt(prompt("dime tu edad"));
if(edad < 0){
    alert("Imposible");
}else if(edad < 13){
    alert("Eres un niño");
}else if(edad < 18){
    alert("Eres un adolescente");
}else if(edad < 60){
    alert("Eres un adulto");
}else{
    alert("Eres un persona mayor");
}