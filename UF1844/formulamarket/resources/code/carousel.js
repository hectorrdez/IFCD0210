let carouselItems = document.querySelectorAll(".slide-fade img");
let basePath = "./resources/imgs/carousel/";
let i = a = b = c = d = e =0;
setInterval(slide,1000);

function slide(){
    for(let i = 0; i < carouselItems.length; i++){
        a++;
        carouselItems[i].src = basePath+
    }
}