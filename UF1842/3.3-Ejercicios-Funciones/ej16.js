/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
16. Crea un script dond edeclares una fucnion obternerImporteConImpuestos que reciba dos parámetros: el importe sin impuestos (numérico) y el tipo de producto (numérico entero). La función debe mostrar por pantalla el importe sin impuestos más el 21% si el tipo de producto es 1, ó el importe sin impuestos más el 10% si el tipo de producto es 2, ó el importe sin impuestos más el 5% si el tipo de producto es 3.
*/
function obternerImporteConImpuestos(importe,tipo){
    if(tipo == 1){
        document.write(importe*1.21);
    }else if(tipo == 2){
        document.write(importe*1.1);
    }else if(tipo == 3){
        document.write(importe*1.05);
    }
}
let importe = parseFloat(prompt("dime el precio del producto"));
let tipo = parseInt(prompt("de que tipo es? 1-3"));
obternerImporteConImpuestos(importe,tipo);