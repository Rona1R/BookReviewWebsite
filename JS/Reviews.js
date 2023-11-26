document.addEventListener("DOMContentLoaded", function () { // e shtova se nuk i merrke elementet e DOM-it
  function displayReview(idLibri) {
    let reviews = document.querySelectorAll(".ReviewDisplay");
    //let reviews = document.getElementsByClassName('ReviewDisplay'); edhe kshtu bon
    for (let i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";
    }
    document.getElementById(idLibri).style.display = "block";
  }

  // shfaqja e review-ve kur klikon butonin

  var showReviewsButtons = document.querySelectorAll(".showReview"); // butonat
  var reviewDisplays = document.querySelectorAll(".ReviewDisplay"); // containers per reviews
//   console.log(showReviewsButtons.length);
  for (let i = 0; i < showReviewsButtons.length; i++) {
    // per secilin buton 

    showReviewsButtons[i].onclick = function () {
      var libriID = reviewDisplays[i].getAttribute("id"); // marr id-in e secilit div te REVIEWS
      displayReview(libriID);
    };
   
  }
  function closeReview(idLibri) {
    document.getElementById(idLibri).style.display = "none";
  }

  var closeReviewButtons = document.querySelectorAll(".closeReview"); // butonat me mshel review

  for(let i=0;i<closeReviewButtons.length;i++){

    closeReviewButtons[i].onclick = function (){
        var libriID = reviewDisplays[i].getAttribute("id"); // i =0,kur klikohet butoni ne poz 0 ne Liste ,merret id-ja e reviewDisplay 0 qe funksionit ia qoj si parameter     
        closeReview(libriID); // ekz ky funksion per cilindo buton qe behet click!
    }
  }
  

  // KODI PER INSERTIMI-n e komenteve ne secilen reviewDisplay per secilin liber
    // qe sbon ko mu fur
  //   var reviewDisplays = document.querySelectorAll(".ReviewDisplay");  KJO MA NALT U BO


  // insertimi i komenteve ne ReviewDisplay:
  // REVIEWDISPLAY Parent i formes (apo Container i review-ve)!!

  var reviewForms = document.querySelectorAll("form");
 /*  console.log(reviewForms);
  console.log(reviewDisplays); */
  //   var reviewDisplays = document.querySelectorAll(".ReviewDisplay");  KJO MA NALT U BO
  //var display1 = reviewDisplays[0];
  //console.log(display1);
  function addReview(displayID,komentiID){ // me dit ne cilen display ka me bo add review-in
    // element femije i display osht textarea qe per neve permban komentin:
    var display = document.getElementById(displayID);
    var komenti = document.getElementById(komentiID);
    //var komenti = document.getElementById("komenti");
    var review = komenti.value; // komenti qe e ka type Useri
    var newReview = document.createElement("div");
    newReview.className = "UserReview";
    newReview.textContent = review; // vendoset review e user-it brenda ktij div-i(e stilizoj ne css)
    

    // display.appendChild(newReview); me bo qe nfillim te display-te me dal komenti qe e shtojme
    display.insertBefore(newReview,display.firstChild);

    console.log(display);
    console.log("komenti"+komenti.value);
    komenti.value="" ;// me resetu tekstin e komentit pasi qe ai te behet add
/*     console.log("JEMI DUKE BERE NE DISPLAY NE "+display.getAttribute("id"));
    console.log(display.childNodes); */
    
  }


  // per secilen forme duhet mu performu eventi i njejte
   // kta e boj me for each dhe callback function
    console.log(reviewForms);
  // pra me forEach ,funksioni callback e merr parameter format ne reviewForms dhe per secilen forme e ekzekuton addEventListener
   reviewForms.forEach(function(formaSpecifike){
    formaSpecifike.addEventListener("submit",function(event){
        event.preventDefault(); // te injorohet sjellja default e formes
        // elementi prind te ciles i perket secila forme:
        var displayPRIND = formaSpecifike.parentNode; // per secilen forme ,merre display-ne specifike
        console.log(displayPRIND);

        var displayIKomenteve = displayPRIND.lastElementChild; //:User Review block
      //  console.log("display i komenteve: "+displayIKomenteve.getAttribute("id"));
        var commentBLOCKID = displayIKomenteve.getAttribute("id");
        console.log("BLOCK ID specifik:"+commentBLOCKID);

        var displayID = displayPRIND.getAttribute("id"); // marr id-ne e display-s

        // id-ne e User review block:
        // var reviewBlockID = displayIKomenteve.getAttribute("id");
        var teksti = formaSpecifike.querySelector("textarea");
        var komentiID = teksti.getAttribute("id"); // marr id-ne e komentin
        
        // addReview(displayID,komentiID); // ia qoj si parameter funksionit display-ne ID ku do insertohet display dhe komentiID qe tregon komentin qe ka mu insertu
        addReview(commentBLOCKID,komentiID); // ia qoj si parameter funksionit display-ne ID ku do insertohet display dhe komentiID qe tregon komentin qe ka mu insertu

    });
   });




  
});
