let nombre = prompt("Quien és?");

if (nombre == "Administrador") {
    let pass = prompt("Contraseña:");
    if (pass == "ElMejor") {
        alert("Bienvenido!");
    } else if (pass == null) {
        alert("Cancelado");
    } else {
        alert("Contraseña incorrecta");
    }
} else if (nombre == null) {
    alert("Cancelado");
} else {
    alert("No te conozco");
}
