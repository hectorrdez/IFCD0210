let redirect = document.querySelector(".redirect");

document.querySelector("input[type=submit]").onclick = write;
let points = "";

function write(){
    setInterval(addPoints, 200);
    
}
function addPoints(){
    if(points.length == 3) points = "";
    if(points.length <= 3) points += ".";
    redirect.innerHTML = "Redireccionando"+points;
    console.log(points);
}