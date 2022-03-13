document.getElementById("section").onload = consolaEscoge();
document.getElementById("reset").onclick = consolaEscoge();


function consolaEscoge(){
    let consola = parseInt(Math.random()*3);
    let jugador = prompt("Que escoges: piedra(p),papel(a) o tijeras(t)?");
    let valor = 0;
    if(jugador == "p") valor = 0;
    if(jugador == "a") valor = 1;
    if(jugador == "t") valor = 2;

    console.log(`consola: ${consola} y jugador: ${valor}`);

    if(valor > consola && ((consola != 0 && valor != 2)||(valor != 0 && consola != 2))){
        alert("jugador a ganado")
    }else if(valor == consola){
        alert("Habeis empatado");
    }else{
        alert("la consola te ha ganado :<")
    }
}