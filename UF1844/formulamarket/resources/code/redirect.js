let points = "";
let pass = "admin";
let user = "admin";

let errorDiv = document.querySelector(".displayError");
let passInput = document.querySelector("input[type=password]");
let userInput = document.querySelector("input[type=text]");

function validate(){
    if(passInput.value != pass || userInput.value != user){
    }else{
        redirect();
    }
}
function redirect(){
    setInterval(displayPoints, 200);
}
function displayPoints(){
    if(points.length == 3) points = "";
    if(points.length < 3) points += ".";
    console.log(points);
    document.querySelector(".redirect").innerHTML = "Redireccionando"+points;
}
