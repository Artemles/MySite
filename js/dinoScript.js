const dino = document.getElementById("dino");
const cactus = document.getElementById("cactus");

start.addEventListener("click", function() {
    cactus.style.animation = "cactusMov 3s infinite linear";
})

paus.addEventListener("click", function paus(){
    cactus.style.animation = "none"
})


 document.addEventListener("keydown", function(event) {
     jump();
 } )


function jump () {
    if  (dino.classList != "jump") {
        dino.classList.add("jump")
    }
    setTimeout( function() {
        dino.classList.remove("jump")
    }, 300)
}

let isAlive = setInterval ( function() {
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    let cactusleft = parseInt(window.getComputedStyle(cactus).getPropertyValue("left"));

    if (cactusleft < 50 && cactusleft > 0 && dinoTop >= 140) {
        alert("GAME OVER!");
    }

}, 10)