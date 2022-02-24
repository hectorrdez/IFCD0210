/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
33. Construye y muestra por consola un "triángulo" de 7 líneas como el siguiente:
*
**
***
****
*****
******
*******
*/
var i = 0;
while(i < 7){
    var j = 0;
    while(j < (i+1)){
        document.write("*");
        j++;
    }
    document.write("<br>");
    i++;
}