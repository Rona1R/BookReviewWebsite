document.addEventListener("DOMContentLoaded", function () { // e shtova se nuk i merrke elementet e DOM-it
  function displayReview(idLibri) {
    let reviews = document.querySelectorAll(".ReviewDisplay");
    //let reviews = document.getElementsByClassName('ReviewDisplay'); edhe kshtu bon
    for (let i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none"; // me u mbyll review displays te tjera para se me u shfaq ajo e cila e kemi bo click
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
  

  
  

  // var reviewForms = document.querySelectorAll("form");

  // function addReview(displayID,komentiID){ 
  //   var display = document.getElementById(displayID);
  //   var komenti = document.getElementById(komentiID);
  //   var review = komenti.value; 
  //   var newReview = document.createElement("div");
  //   newReview.className = "UserReview";
  //   newReview.textContent = review; 
    
  //   display.insertBefore(newReview,display.firstChild);

  //   console.log(display);
  //   console.log("komenti"+komenti.value);
  //   komenti.value="" ;
    
  // }

  //   console.log(reviewForms);
  //  reviewForms.forEach(function(formaSpecifike){
  //   formaSpecifike.addEventListener("submit",function(event){
  //       event.preventDefault();
  //       var displayPRIND = formaSpecifike.parentNode; 
  //       console.log(displayPRIND);

  //       var displayIKomenteve = displayPRIND.lastElementChild; 
  //       var commentBLOCKID = displayIKomenteve.getAttribute("id");
  //       console.log("BLOCK ID specifik:"+commentBLOCKID);

  //       var displayID = displayPRIND.getAttribute("id"); 
  //       var teksti = formaSpecifike.querySelector("textarea");
  //       var komentiID = teksti.getAttribute("id"); 
  //       var review = teksti.value;
  //       if (review.trim() === '') {
  //           alert("Comment can not be empty!!");
  //           return;  
  //       }
  //       addReview(commentBLOCKID,komentiID); 

  //   });
  //  });




  
});
