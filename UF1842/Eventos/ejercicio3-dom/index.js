function tirarDados(){
    let dado = document.getElementById("dado");
    let sale = parseInt(Math.random()*6)+1;
    document.getElementById("dado").src = `${sale}.png`;
}