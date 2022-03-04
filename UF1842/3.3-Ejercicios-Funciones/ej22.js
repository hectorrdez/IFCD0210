/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
22. Crea una aplicación que nos pida un número por teclado y con un método se lo pasamos por parámetro para que nos indique si es o no un número primo, debe devolver true si es primo sino false.

Un número primo es aquel solo puede dividirse entre 1 y si mismo. Por ejemplo: 25 no es primo, ya que 25 es divisible entre 5, sin embargo, 17 si es primo.
*/
function numeroTeclado(){
    let num = parseInt(prompt("Dime un numero"));
    return comprobarPrimo(num);
}
function comprobarPrimo(num){
    let divisibles = 0;
    for(let i = 1; i < 1000; i++){
        if((num%i) == 0){
            divisibles++;
        }
    }
    if(divisibles == 2){
        console.log("Es primo");
        return true;
    }
    console.log("no es primo")
    return false;
}
document.write(numeroTeclado());