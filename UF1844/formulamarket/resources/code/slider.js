let sliderImgs = document.querySelectorAll(".slider img");
let sliderImgsDiv = document.querySelectorAll(".slider");
let basePath = "/resources/imgs/slider/";

for(let i = 0; i < sliderImgsDiv.length; i++){
    sliderImgsDiv[i].onmouseover = stopSliding;
}

startSliding();

let imgs = new Array(5);
for(let i = 0; i < imgs.length; i++){
    imgs[i] = i+1;
}

function startSliding(){
    slideTime = setInterval(slide, 1000);
}

function slide(){
    console.log("change imgs");
    for(let i = 0; i < imgs.length; i++){
        if(imgs[i] == imgs.length){
            imgs[i] = 1;
        }else{
            imgs[i] = imgs[i]+1;
        }
    }

    sliderImgs[0].src = basePath+imgs[0]+".jpg";
    sliderImgs[1].src = basePath+imgs[1]+".jpg";
    sliderImgs[2].src = basePath+imgs[2]+".jpg";
    sliderImgs[3].src = basePath+imgs[3]+".jpg";
    sliderImgs[4].src = basePath+imgs[4]+".jpg";

}
function stopSliding(){
    console.log("stopping sliding");
    clearInterval(slideTime);
    setTimeout(startSliding, 5000);
}