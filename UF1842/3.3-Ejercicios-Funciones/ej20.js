/*
Héctor Rodríguez Tovar
03/03/2022
Javascript-3.3
*/
/*
20. Se debe implementar una función que al recibir dos números A y B, indique la cantidad N que hay que sumarle a A para que A+N sea divisible entre B. Por ejemplo, si A=4 y B=3, N será 2.
*/
function divisible(a,b){
    let i;
    for(i = 1; i < 1000; i++){
        if((a+i)%b == 0){
            break;
        }
    }
    return i;
}
let num1 = parseInt(prompt("dime un numero"));
let num2 = parseInt(prompt("dime un numero"));
document.write(`Se necesita un ${divisible(num1,num2)} para hacer que ${num1} sea divisible entre ${num2}`);