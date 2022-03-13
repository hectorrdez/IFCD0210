// var limit = 20;
// $(function() {
//     $("#txt_detalle").on("input", function () {
//         //al cambiar el texto del txt_detalle
//         var init = $(this).val().length;
//         total_characters = (limit - init);

//         $('#contador').html(total_characters + " caracteres restantes");
//     });
// });
let content;

function pulsado(){
    let tamaño = document.getElementById("texto").value.length;
    if(tamaño >= 20){
        document.getElementById("texto").value = document.getElementById("texto").value.substring(0,19);
    }
    document.getElementById("caracteres").innerText= `${20-tamaño} caracteres restantes`;
}