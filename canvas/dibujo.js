var d = document.getElementById("dibujito");
var lienzo = d.getContext("2d");

dibujarlinea("blue", 10, 300, 220, 10);
dibujarlinea("red", 10, 200, 220, 30);
dibujarlinea("red", 1, 200, 36, 43  );


function dibujarlinea(color, xinicial, yinicial, xfinal, yfinal)
{
    lienzo.beginPath();
    lienzo.strokeStyle = color;
    lienzo.moveTo(xinicial, yinicial);
    lienzo.lineTo(xfinal, yfinal);
    lienzo.stroke();
    lienzo.closePath();
}


