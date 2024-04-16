function validateForm(){
    var fullName = document.forms["inputField"]["fullName"].value;
    var email = document.forms["inputField"]["email"].value;
    var message = document.forms["inputField"]["message"].value;

    if(fullName == ""){
        alert("Please input your name");
        return false;
    }
    else if(email == ""){
        alert("Please input your email");
        return false;
    }
    alert("Name: " + fullName + "\nEmail: " + email + "\nMessage: " + message);
}

window.addEventListener("resize", checkWidth);

function checkWidth(){
    var width = window.innerWidth;
    var inputField = document.getElementById("input-field");
    var formNameHolder = document.getElementById("form-name-holder");
    var formEmailHolder = document.getElementById("form-email-holder");
    var formMessageHolder = document.getElementById("form-message-holder");
    if(width < 900){
        inputField.style.width = "100%";
        formNameHolder.style.margin = "20px";
        formEmailHolder.style.margin = "20px";
        formMessageHolder.style.margin = "20px";
    }
    else{
        inputField.style.width = "30%";
        formNameHolder.style.margin = "0px";
        formEmailHolder.style.margin = "0px";
        formMessageHolder.style.margin = "00px";
        
    }
    var backToHome = document.getElementById("back-to-home");
    if(width < 1000){
        backToHome.style.left = "70%";
    }
    else{
        backToHome.style.left = "80%";
    }
}