let xmax = window.innerWidth;
let ymax = window.innerHeight;

let boton = document.getElementById("boton");
let newx = 0;
let newy = 0;

function cambiarPOS() {
    newx = parseInt(Math.random() * ymax);
    console.log(boton.style.left);
    boton.style.left = `${newx}px`;
    newy = parseInt(Math.random() * xmax);
    boton.style.top = `${newy}px`;
    console.log(`altura:${newy} anchura:${newx}`);
}