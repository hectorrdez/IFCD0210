let phrases = ["aprender","dormir","estudiar"];
let phrase;

let controlBt = document.querySelector("#control");

let display = document.querySelector(".displayPhrase");
let letters;

let wordsFail = document.querySelector(".wordsFail");
let keyboard = document.querySelector(".keyboard");

let text = document.querySelector("input");

controlBt.onclick = checkControlBt;

function checkControlBt(){
    if(controlBt.className == "start"){
        controlBt.classList.replace("start","started");
        createDisplay();
    }else{
        if(text.value.length > 1){
            text.style.borderColor = "grey";
            checkPhrase();
        }else if(text.value.length == 1){
            text.style.borderColor = "grey";
            checkLetter();
        }else{
            text.style.borderColor = "red";
        }
    }
}

function createDisplay(){
    phrase = phrases[parseInt(Math.random()*phrases.length)];
    for(let i = 0; i < phrase.length; i++){
        display.innerHTML += `<div class="letter"><span class="hidden">${phrase[i]}</span></div>`;
    }
    letters = document.querySelectorAll("span");
}

function checkLetter(){
    let find = 0;
    for(let i = 0; i < phrase.length; i++){
        if(text.value == phrase[i]){
            letters[i].classList.remove("hidden");
            find++;
        }
    }
    if(find > 0){
        keyboard.innerHTML += `<button class="guess">${text.value}</button>`;       
    }else{
        keyboard.innerHTML += `<button class="notGuess">${text.value}</button>`;
    }
    text.value = "";
}
function checkPhrase(){
    if(text.value == phrase){
        text.style.borderColor = "green";
        for(let i = 0; i < letters.length; i++){
            letters[i].classList.remove("hidden");
        }
        
    }else{
        wordsFail.innerHTML += `<span class="fail">${text.value}</span>`;
    }
}