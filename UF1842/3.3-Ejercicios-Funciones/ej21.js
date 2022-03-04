/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
21. Se debe implementar un programa en que permite jugar al juego Piedra, Papel, Tijera contra la máquina.
El juego costará de varias rondas y ganará el que gane 2 rondas. El juego terminará cuando el usuario ya no quiera seguir jugando. El programa deberá mostrar en cada ronda, las rondas que lleva ganadas cada jugador. Y al final de la partida, las partidas que lleva ganadas cada jugador.

Para implementar el juego, además de la función principal, como mínimo, el programa debe contener las siguientes funciones:

● Función “apuestaUsuario”. Este módulo debe pedir al usuario si quiere Piedra, Papel o Tijera. (Piedra (p), Papel(a) o Tijera(t)).

● Función “piedraPapelTijera”. Este módulo mostrará y devolverá si la máquina ha

elegido Piedra, Papel o Tijera. Debe calcularlo de manera aleatoria, para ello debe

utilizar la función random(). Por lo ejemplo, la función devolverá Piedra si “valor” es 0, devolverá Papel si “valor” es 1 o devolverá Tijera si “valor” es 2.

● Función “comprobar”. Este módulo comprobará cuál de los dos jugadores ha ganado la ronda y mostrará los resultados. También comprobará si alguno de los dos

jugadores ha ganado ya 2 rondas, y por tanto, la partida. Si, es así, mostrará quién ha ganado y las partidas que lleva ganadas cada jugador
*/
function apuestaUsuario() {
    console.log("Definio al usuario");
    let user = prompt("Quieres Piedra(p), Papel(a) o Tijera(t)?");
    if (user == "p") user = 0;
    if (user == "a") user = 1;
    if (user == "t") user = 2;
    console.log("El usuario ha selecionado: "+user);
    return user;
}
function piedraPapelTijera() {
    console.log("Creo la IA");
    let ia = parseInt(Math.random() * 3);
    console.log("Ha salido "+ia);
    return ia;
}
function comprobar() {
    console.log("Entro en comprobar");
    let aWins = 0;
    let bWins = 0;
    let a, b;
    do {
        a = apuestaUsuario();
        b = piedraPapelTijera();


        if (a < b) {
            bWins++;
        } else if (a > b) {
            aWins++;
        } else if (a == 2 && b == 0) {
            bWins++;
        }else if(b == 2 && a == 0){
            aWins++;
        }else{

        }
    } while (aWins != 2 && bWins != 2);
    document.write(`Rondas por jugador: ${aWins} para user y ${bWins} para la IA <br>`);
    document.write("Ha ganado ");
    if (aWins == 2) document.write(`Usuario!`);
    if (bWins == 2) document.write(`IA`);
}
comprobar();