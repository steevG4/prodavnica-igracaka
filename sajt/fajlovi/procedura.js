var brojac1 = 0;
var brojac2 = 0;

function meni(x) {
    var b = document.getElementById("lista1");
    var c = document.getElementById("lista2");
    
    if (x == 1) {
        if (brojac1 % 2 == 0) {
            b.style.display = "block";
        } else {
            b.style.display = "none";
        }
        brojac1++;
    } else {
        if (brojac2 % 2 == 0) {
            c.style.display = "block";
        } else {
            c.style.display = "none";
        }
        brojac2++;
    }
}

function vreme(){
var sad=new Date();
var sati=sad.getHours();
var minuti=sad.getMinutes();
var hold=document.getElementById("vreme");
hold.innerHTML="Tacno je "+sati+":"+minuti;
setInterval(vreme,6000);
}

var brojacSlajdova = 0;
var elementi = document.getElementsByClassName("slajd"); 
function slajder() {
    for (var i = 0; i < elementi.length; i++) {
        elementi[i].style.display = "none";
    }
    elementi[brojacSlajdova].style.display = "block";
    brojacSlajdova++;

    if (brojacSlajdova >= elementi.length) {
        brojacSlajdova = 0; 
    }
}

setInterval(slajder, 1000);
document.querySelector("form").addEventListener("submit", function (event) {
    const minCena = document.getElementById("minCena").value;
    const maxCena = document.getElementById("maxCena").value;

   
    
    
});