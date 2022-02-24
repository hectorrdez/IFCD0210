/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
20. Construye y muestra por consola un "triángulo" de 7 líneas como el siguiente:
*/
for(var i = 1; i < 8; i++){
    for(var j = 1; j <= i; j++){
        document.write("*");
    }
    document.write("<br>");
}