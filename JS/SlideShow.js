var i = 0; // me iteru ne te djathe ----->
var j = 0;

var releasesIMG = [
    "FOTOT/BelieveMe.jpg",
    "FOTOT/Insurgent.jpeg",
    "FOTOT/DeadRomantics.png",
    "FOTOT/LoveAtFirstLike.jpg"];

function updateIMG(){
    document.getElementById('slideShow').src = releasesIMG[i];
    if(i<releasesIMG.length-1){
        i++;
        j=i;
    }
}
console.log('j-ja eshte: '+j);

function updateIMGPrevious(){
   if(j!=0){
       j=j-1;
       document.getElementById('slideShow').src = releasesIMG[j];
       console.log(j);
    }
}
   

window.addEventListener('load', updateIMG);