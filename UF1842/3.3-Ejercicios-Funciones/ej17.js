/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
17. Crea un script donde declares una función obtenerImporteConImpuestos2 que reciba un parámetro: el importe sin impuestos (numérico). La función debe devolver un array con valor undefined para el índice 0, el importe sin impuestos más el 21% para el índice 1, el importe sin impuestos más el 10% para el índice 2, ó el importe sin impuestos más el 5% para el índice 3. Invoca la función haciendo que se muestre el contenido del array por pantalla.
*/
function obtenerImporteConImpuestos2(importe){
    precios[1] = importe * 1.21;
    precios[2] = importe * 1.10;
    precios[3] = importe * 1.05;
    return precios;
}
let importe = parseInt(prompt("dime el precio del producto"));
let precios = Array(4);
obtenerImporteConImpuestos2(importe);
for(var i = 0; i< precios.length; i++){
    document.write(`${precios[i]}<br>`);
}