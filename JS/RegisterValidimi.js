/*VEQ SHEMBULL PREJ KLASE ndryshe mos e merr tnjejten */
function registerValidimi(){

    var email = document.getElementById('email');
    var passwordi = document.getElementById('password');


    var emailRegex  = 	/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    var passRegex = 	/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/;

    if(!emailRegex.test(email)){
        alert("Enter valid email!");
        return false;
    }

    if(!passRegex.test(passwordi)){
        alert("Enter valid password!");
        return false;
    }

    return true
}