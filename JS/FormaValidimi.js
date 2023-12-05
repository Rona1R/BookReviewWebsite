function validate(){
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;

    var emailREGEX = /^[a-zA-Z.-_]+@[^\s@]+\.[a-z]{3,3}$/;
    // var passREGEX = /^[A-Z]+[a-zA-Z]+[0-9]{3}$/
    var passREGEX = /^[A-Z]+[A-Za-z!*?0-9]{7,}$/;

    /*if(!(name.length>8 && name.length<15 && nameREGEX.test(name))){
        alert("Username nuk eshte shkruar ne rregull!!");
        return false;
    }*/

    if(!emailREGEX.test(email)){
        alert("Email nuk eshte shkruar ne rregull!!");
        return false;
    }

    if(!passREGEX.test(pass)){
        alert("Passwordi duhet te filloje me shkronje te madhe,te permbaje *,! ose ? dhe te kete minimalisht 8 karaktere!!");
        return false;
    }

    return true;

}

// kjo eshte per register
function validate2(){

    var email = document.getElementById("email1").value;
    var pass = document.getElementById("password1").value;
    var confirm = document.getElementById("confirm").value;

    var emailREGEX = /^[a-zA-Z.-_]+@[^\s@]+\.[a-z]{3,3}$/;
    var passREGEX = /^[A-Z]+[A-Za-z!*?0-9]{7,}$/;

    if(!emailREGEX.test(email)){
        alert("Email nuk eshte shkruar ne rregull!!");
        return false;
    }

    if(!passREGEX.test(pass)){
        alert("Passwordi duhet te filloje me shkronje te madhe,te permbaje *,! ose ? dhe te kete minimalisht 8 karaktere!!");
        return false;
    }

    if(pass !== confirm){
        alert("Rishkruaj passwordin!");
        return false;
    }
    return true;

}