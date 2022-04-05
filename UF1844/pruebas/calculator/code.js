var displayOperations = document.querySelector(".operations");
var displayResult = document.querySelector(".result");
if (displayOperations.value == null) {
    displayResult.innerHTML = "0";
}

let keyboard = document.querySelectorAll(".key");
for(let i = 0; i < keyboard.length; i++){
    keyboard[i].onclick = selectedKey;
}

let operations = document.querySelectorAll(".operation");
for(let i = 0; i < operations.length; i++){
    operations[i].onclick = selectedOperation;
}

let actions = document.querySelectorAll(".action");
for(let i = 0; i < actions.length; i++){
    actions[i].onclick = selectedAction;
}

function selectedKey(){
    console.log(`Selected key ${this.innerHTML} pressed!`);
    displayOperations.innerHTML += this.innerHTML;
}

function selectedOperation(){
    console.log(`Selected operaction ${this.innerHTML} pressed!`);
    displayOperations.innerHTML += ` ${this.innerHTML} `;
}

function selectedAction(){
    console.log(`Procceded action ${this.innerHTML} pressed!`);
    let action = this.innerHTML;
    switch(action){
        case 'AC':
            console.log(`Clean All, including History with ${action}`);
            displayOperations.innerHTML = "";
            displayResult.innerHTML = 0; 
            cleanHistory();
            break;
        case 'C':
            console.log(`Clean only last introducction with ${action}`);
            displayOperations.innerHTML = "";
            break;  
        case '=':
            console.log(`Selected calculate with ${action}`);
            calculate();
            break;
    }
}
function calculate(){

}