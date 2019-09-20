var img1 = document.getElementById("img1").style;
var img2 = document.getElementById("img2").style;

var w1 = 100, w2 = 0, test = 0;

// var sldtimer = setInterval(timer, 50);

function timer(){
    if(!test){
        w1 -= 10;
        img1.width = w1 + "%";
        w2 += 10;
        img2.width = w2 + "%";
    }
    else{
        w1 += 10;
        img1.width = w1 + "%";
        w2 -= 10;
        img2.width = w2 + "%";
    }
    if(w1 == 0 && w2 == 100){
        test = 1;
    }
    else if(w2 == 0 && w1 == 100)
        test = 0;
}