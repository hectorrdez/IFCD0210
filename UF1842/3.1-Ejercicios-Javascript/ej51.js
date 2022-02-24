/*
Héctor Rodríguez Tovar
24/02/2022
Javascript-3.1
*/
/*
51. Pinta un tablero de ajedrez sin fichas (ojo con los colores de las casillas)
*/
document.write("<table>");
for(var y = 0; y < 8; y++){
    document.write("<tr>");
    for(var x = 0; x < 8; x++){
        document.write("<td id="+x+y);
        if((x+y)%2 ==0){
            document.write(" class=blanco>");
        }else{
            document.write(" class=negro>");
        }
        if(y < 2) document.write("<h6 class=negro>");
        if(y >= 6) document.write("<h6 class=blanco>")
        if(y == 1 || y == 6) document.write("P");
            if((x == 0 && y == 0) || (x == 7 && y == 0) || (x == 0 && y == 7) || (x == 7 && y == 7)) document.write("T")
        document.write("</h6>")

        document.write("</td>");
    }
    document.write("</tr>")
}
document.write("</table>")