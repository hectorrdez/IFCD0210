/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
19. Crear una función que reciba un array multidimensional de 3x3, dentro de la función rellena el array con número aleatorios. El array relleno debe enviarse a otra función como parámetro de entrada, donde se recorrerá para mostrar la tabla de 3x3 en pantalla (con document.write).
*/
function randomArray(megaarray){
    for(let i = 0; i < megaarray.length; i++){
        for(let j = 0; j < megaarray[i].length; j++){
            megaarray[i][j] = Math.random()+1;
        }
    }
    return megaarray;
}
function mostrarArray(megaarray){
    for(let i = 0; i < megaarray.length[i]; i++){
        for(let j = 0; j < megaarray[i][j].length; j++){
            document.write(`${megaarray[i][j]}-`);
        }
        document.write(`<br>`)
    }
}
let megaarray = Array(3);
for(let i = 0; i < megaarray.length; i++){
    megaarray[i] = ew.Array(3);
}
randomArray(megaarray);
