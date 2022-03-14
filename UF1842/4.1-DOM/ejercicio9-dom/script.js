let posicion = 0;
let newpos = 0;
let restantes = 0;
let max = 64;

let tirar = document.getElementById("tirar");
tirar.onclick = posiciones;

let reset = document.getElementById("reset");
reset.onclick = resetMatch;

let imagen = "<img src='ficha.png'>"
let salida = document.querySelector(".grid1");
salida.innerHTML = imagen;

function tirarDados(){
    let tirada = parseInt(Math.random()*6+1);
    console.log(tirada);
    document.getElementById("dado").src = `dados/${tirada}.png`;
    return tirada;
}
function movimientos(newpos){
    for(let i = 1; i <= max; i++){
        document.querySelector(`.grid${i}`).innerText=i;
    }
    document.querySelector(`.grid${newpos}`).innerHTML = imagen;
    if(newpos == max){
        alert("El juego se ha terminado");
    }
}
function posiciones(){
    let tirada = tirarDados();
    if((posicion + tirada) > max){
        restantes = (posicion + tirada) - max;
        newpos = max - restantes;
    }else{
        newpos = posicion + tirada;
    }
    movimientos(newpos);
    posicion = newpos;
}
function resetMatch(){
    posicion = 1;
    for(let i = 1; i <= max; i++){
        document.querySelector(`.grid${i}`).innerText=i;
    }
    document.querySelector(`.grid${posicion}`).innerHTML = imagen;
}
