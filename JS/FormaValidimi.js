
function validate(){

    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("password").value.trim();
    var username = document.getElementById("usernameID").value.trim();
    var emailREGEX = /^[a-zA-Z.-_]+@[^\s@]+\.[a-z]{3,3}$/;
    var passREGEX = /^[A-Z]+[A-Za-z!*?0-9]{7,}$/;
    var usernameREGEX = /^[a-zA-Z][a-zA-Z0-9-_]{4,}$/;

    if(!emailREGEX.test(email)){
        alert("Email nuk eshte shkruar ne rregull!!");
        return false;
    }
    if(!usernameREGEX.test(username)){
        alert("Username duhet te filloje me shkronje dhe te kete me shume se 4 karaktere!!");
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

    var email = document.getElementById("email1").value.trim();
    var pass = document.getElementById("password1").value.trim();
    var username = document.getElementById("usernameID2").value.trim();
    var confirm = document.getElementById("confirm").value;

    var emailREGEX = /^[a-zA-Z.-_]+@[^\s@]+\.[a-z]{3,3}$/;
    var passREGEX = /^[A-Z]+[A-Za-z!*?0-9]{7,}$/;
    var usernameREGEX = /^[a-zA-Z][a-zA-Z0-9-_]{4,}$/;

    if(!emailREGEX.test(email)){
        alert("Email nuk eshte shkruar ne rregull!!");
        return false;
    }
    if(!usernameREGEX.test(username)){
        alert("Username duhet te filloje me shkronje dhe te kete me shume se 4 karaktere!!");
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

