//Aquí va vuestro código javascript

/*Ejercicios:

Nota: 
-Todos los botones que se inserten, deben de llamar a una función que debemos de crear en este archivo. Una función por cada botón.
-El texto de los botones que hay que insertar, contendrá un texto acorde con lo que va a hacer

1) Modifica la función "inicial" (comenta el alert que hay) para que cambie el color del subtitulo a rojo
	Ayuda: document.getElementById("subtitulo").style.color="red"

2) Crea un botón en el dív con id="listaBotones" que que al pulsarlo cambiará el subtitulo de la web por "Este es el subtitulo". Ayuda: utiliza para cambiar el texto el siguiente código 
			document.getElementById("subtitulo").innerHTML="Este es el subtitulo";
			
3) Crear un botón que intercambie los texto entre los div explanation y participation

4) Crea un botón en el dív con id="listaBotones" que se llamará "Cambiar titulo" que al pulsarlo cambiará el titulo de la web por "Este es mi titulo". Haz las modificaciones necesarias en el html para que puedas modificarlo

5) Modifica la función "inicial" para que introduzca la hora actual del ordenador en el div "hora". Luego descomenta la función setInterval y comprueba el resultado

6) Crea un botón para que inserte una imagen en el div "imagenes". 
	Ayuda: document.getElementById("imagenes").innerHTML="<img id='imagenAnadida' src='ruta_a_la_imagen'/>"
	
7) Crea un botón que modifique el tamaño de la imagen que acabas de insertar en el ejercicio anterior. Debe de cambiar el ancho a 100px

8) Crear un boton que oculte el div "participation".
	Ayuda: Existe un estilo llamado "display" que si lo ponemos con valor a "none" oculta el elemento

9) Crear un boton que muestre el div "participation".
	Ayuda: Existe un estilo llamado "display" que si lo ponemos con valor a "block" muestra el elemento
	
10) Modifica el código html para que al pulsar sobre "Why do we use it?" desaparezca el parrafo que hay debajo. Si se vuelve a pulsar sobre el mismo texto, debe de aparecer.	
	
11) El boton "inscribir!" debe de validar que se haya introducido un nombre mayor de 5 caracteres y un email correcto. 
   En caso de insertar alguno de los 2 mal. Cambiará el border del input erróneo a rojo
   Ayuda: document.getElementById("nombre").style.border="1px solid red"
   
13) Los enlaces del menu deben de desaparecer al pulsar sobre ellos.   
*/


document.getElementById("cambiarSub").onclick = cambiarSub;
document.getElementById("cambiarDiv").onclick = cambiarTexto;
document.getElementById("cambiarTitulo").onclick = cambiarTitulo;
document.getElementById("cambiarIMG").onclick = añadirIMG;
document.getElementById("aumentarIMG").onclick = aumentarIMG;
document.getElementById("ocultarDiv").onclick = ocultarDiv;
document.getElementById("aparecerDiv").onclick = aparecerDiv;
document.getElementById("whydoweuseit").onclick = cambioWhy;
// document.querySelector("input[type='button']").onclick = validar;

function inicial(){
	document.getElementById("subtitulo").style.color = "red";
	//alert("Esto es un alert puesto en la función del evento inicio");
	//alert("Este es el texto de explanation: " + document.getElementById("explanation").innerHTML);
	//dameHora()
	setInterval(dameHora,1000);
	
}


function cambiarSub(){
	document.getElementById("subtitulo").innerHTML="Este es el subtitulo";
}

function cambiarTexto(){
	let explanation = document.getElementById("explanation").innerHTML;
	let participation = document.getElementById("participation").innerHTML;

	document.getElementById("participation").innerHTML = explanation;
	document.getElementById("explanation").innerHTML = participation;

}

function cambiarTitulo(){
	document.getElementById("titulo").innerHTML = "Este es mi titulo";
}
function dameHora(){
	var fecha = new Date();
	var fechaActual= fecha.getDate() + "/" + (fecha.getMonth()+1)+ "/" 
					+ fecha.getFullYear() + " " + fecha.getHours() + ":" + fecha.getMinutes() + ":" + fecha.getSeconds();
	document.getElementById("hora").innerHTML= fechaActual;					
}

function añadirIMG(){
	document.getElementById("imagenes").innerHTML="<img id='imagenAnadida' src='imagenes/header.jpg'/>"
}

function aumentarIMG(){
	document.getElementById("imagenAnadida").width = "100";
}
function ocultarDiv(){
	document.getElementById("participation").style.display = "none";
}
function aparecerDiv(){
	document.getElementById("participation").style.display = "block";
}
function cambioWhy(){
	(document.getElementById("cambios").style.display == "none")? (document.getElementById("cambios").style.display = "block"):(document.getElementById("cambios").style.display = "none");
}

function validar(){
	let nombre = document.getElementById("nombre");
	let email = document.getElementById("email").value;
	let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
	if(nombre.value.length < 5){
		nombre.style.border="1px solid red";
	}else{
		nombre.style.border = "1px solid grey";
	}
	if(emailRegex.test(email)){
		email.style.borderColor = "red";
		return true;
	}else{
		email.style.borderColor = "red";
		return false;
	}
	
}

function modificarMenu(element){
	element.style.display = "none";
}