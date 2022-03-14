let p = document.getElementById("parrafo");
let tamaño = parseInt(p.style.fontSize);
function aumentar() {
    p.style.fontSize = `${++tamaño}px`;
}
function disminuir() {
    p.style.fontSize = `${--tamaño}px`;
}