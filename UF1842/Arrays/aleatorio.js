/*
Héctor Rodríguez Tovar
01/03/2022
Javascript-arrays
*/
/*
Rellenar un array con 10 numeros aleatorios entre 1 y 100. Mostrar el array en pantalla. Decir que numero es el mayor. Decir que numero es el menor.
*/
let min = 1; let max = 100;
let numeros = Array(10);
let maximo = 0; let minimo = 100;
console.log("He cargado");

function numeroRandom(min, max){
    let aleatorio = parseInt(Math.random() * (max - min) + min);
    console.log("He entrado en la funcion"+aleatorio);
    return aleatorio;
}
for(var i = 0; i < numeros.length; i++){
    numeros[i] = numeroRandom(max, min);
    if(numeros[i] > maximo) maximo = numeros[i];
    if(numeros[i] < minimo) minimo = numeros[i];
    document.write(numeros[i]+"<br>");
    console.log("Calculado numero nuevo");
}
document.write(`El maximo es: ${maximo}<br>`);
document.write(`El minimo es: ${minimo}<br>`);