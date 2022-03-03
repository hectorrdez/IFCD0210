/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
15. Una función que reciba como parámetros el valor del radio y la altura de un cilindro y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura siendo númeroPi = 3.1416 aproximadamente. Muestra por pantalla el valor de la variable en pantalla.
*/
function circulo(r,h){
    return numeroPi * r * r * h;
}
let numeroPi = 3.1416;
let r = parseInt(prompt("El radio"));
let h = parseInt(prompt("El alto"));
document.write(circulo(r,h));