/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
19. Crear una función que reciba un array multidimensional de 3x3, dentro de la función rellena el array con número aleatorios. El array relleno debe enviarse a otra función como parámetro de entrada, donde se recorrerá para mostrar la tabla de 3x3 en pantalla (con document.write).
*/
function rellenaArray(array){
    for(let i = 0; i < array.length; i++){
        for(let j = 0; j < array[i].length; j++){
            array[i][j] = parseInt(Math.random()*1000+1);
        }
    }
    mostrarArray(array);
}
function mostrarArray(array){
    for(let i = 0; i < array.length; i++){
        for(let j = 0; j < array[i].length; j++){
            document.write(`${array[i][j]}-`);
        }
        document.write("<br>");
    }
}

let megaarray = new Array(3);
for(let i = 0; i < megaarray.length; i++){
    megaarray[i] = new Array(3);
}
rellenaArray(megaarray);