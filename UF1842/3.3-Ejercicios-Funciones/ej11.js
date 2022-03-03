/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
11. Crear una función que pida un nombre, un apellido y un lugar y a raíz de ahí muestre en pantalla una pequeña historia: muestra el resultado con document.write
*/

function historia() {
    let nombre = prompt("dime tu nombre");
    let apellido = prompt("dime tu apellido");
    let lugar = prompt("dime tu lugar");
    document.write(`Era se una vez ${nombre}, de apellido ${apellido} que vivia en ${lugar}`);
}

historia();
