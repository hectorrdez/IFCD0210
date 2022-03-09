function ampliar(image){
    let img = document.getElementById(image);
    img.classList.add("zoom");
}

function normal(image){
    let img = document.getElementById(image);
    img.classList.remove("zoom");    
}