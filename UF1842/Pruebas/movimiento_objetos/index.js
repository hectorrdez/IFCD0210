let x = 0, y = 0, acelx = 1, acely = 1;
let intervalo = setInterval(MyTimer, 20);

function MyTimer() {

    if ((x + acelx < document.getElementById("fondo").offsetWidth - 25) && (x + acelx > 0))
        x += acelx;
    else
        acelx = -acelx;

    if ((y + acely < document.getElementById("fondo").offsetHeight - 25) && (y + acely > 0))
        y += acely;
    else
        acely = -acely;

    document.getElementById("boton").style.left = x + "px";
    document.getElementById("boton").style.top = y + "px";
}