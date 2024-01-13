var i = 0; // me iteru ne te djathe ----->


var releasesIMG = [
    "FOTOT/BelieveMe.jpg",
    "FOTOT/Insurgent.jpeg",
    "FOTOT/DeadRomantics.png",
    "FOTOT/LoveAtFirstLike.jpg"];

var genres = [
    "Fantasy.php",
    "Fantasy.php",
    "Romance.php",
    "Romance.php"
]

function updateIMG(){
    
    document.getElementById('slideShow').src = releasesIMG[i];
    document.getElementById('GenreLink').href = genres[i];
    if(i<releasesIMG.length-1){
        i++;
    }
    else{
        i=0;
    }
}

document.addEventListener('DOMContentLoaded', function(updateIMG) {

});


window.addEventListener('load', updateIMG);