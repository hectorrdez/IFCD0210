function paroimpar(numero){
    if(numero%2 == 0 ) document.write("es par");
    if(numero%2 != 0 ) document.write("es impar");
}

let num = 0;
do {
    num = parseInt(prompt("dime un numero"));
} while (num == null);
paroimpar(num);