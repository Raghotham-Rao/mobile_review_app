var img1 = document.getElementById("img1").style;
var img2 = document.getElementById("img2").style;

var w1 = 100, w2 = 0;

// var sldtimer = setInterval(timer, 50);

function timer(){
    w1 -= 10;
    img1.width = w1 + "%";
    w2 += 10;
    img2.width = w2 + "%";
}