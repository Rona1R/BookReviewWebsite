function displayReview(idLibri){
     let reviews = document.querySelectorAll('.ReviewDisplay');
    //let reviews = document.getElementsByClassName('ReviewDisplay'); edhe kshtu bon
    for(let i=0;i<reviews.length;i++){
        reviews[i].style.display = 'none';
    }
    document.getElementById(idLibri).style.display='block';
}

function closeReview(idLibri){
    document.getElementById(idLibri).style.display='none';
}
