window.addEventListener("resize", checkContent);
window.addEventListener("resize", porkCheckContent);
window.addEventListener("resize", springRollCheckContent);
window.addEventListener("resize", othersCheckContent);

var width = window.innerWidth;
var categoryContainer = document.getElementById("category-container");
var backToHomeMenu = document.getElementById("back-to-home-menu");

function othersCheckContent(){
    width = window.innerWidth;
    var othersHolder = document.getElementById("others-holder-container");
    var othersImageHolder1 = document.getElementById("others-image-holder-1");
    if(width < 1000){
        backToHomeMenu.style.marginTop = "120px";
        backToHomeMenu.style.left = "70%";
        categoryContainer.style.display = "none";
        othersHolder.style.display = "block";
        othersImageHolder1.style.width = "70%";
        othersImageHolder1.style.left = "50%";
        othersImageHolder1.style.position = "relative";
        othersImageHolder1.style.transform = "translate(-50%, 0%)";
        othersImageHolder1.style.margin = "0px";
        othersImageHolder1.style.marginTop = "50px";
    }
    else{
        backToHomeMenu.style.marginTop = "230px";
        backToHomeMenu.style.left = "80%";
        categoryContainer.style.display = "block";
        othersHolder.style.display = "flex";
        othersImageHolder1.style.width = "25%";
        othersImageHolder1.style.left = "0%";
        othersImageHolder1.style.position = "relative";
        othersImageHolder1.style.transform = "translate(0%, 0%)";
        othersImageHolder1.style.margin = "50px";
        othersImageHolder1.style.marginTop = "0px";
    }
}

function springRollCheckContent(){
    width = window.innerWidth;
    var springRollHolder = document.getElementById("spring-roll-holder-container");
    var springRollImageHolder1 = document.getElementById("spring-roll-image-holder-1");
    if(width < 1000){
        backToHomeMenu.style.marginTop = "120px";
        backToHomeMenu.style.left = "70%";
        categoryContainer.style.display = "none";
        springRollHolder.style.display = "block";
        springRollImageHolder1.style.width = "70%";
        springRollImageHolder1.style.left = "50%";
        springRollImageHolder1.style.position = "relative";
        springRollImageHolder1.style.transform = "translate(-50%, 0%)";
        springRollImageHolder1.style.margin = "0px";
        springRollImageHolder1.style.marginTop = "50px";
    }
    else{
        backToHomeMenu.style.marginTop = "230px";
        backToHomeMenu.style.left = "80%";
        categoryContainer.style.display = "block";
        springRollHolder.style.display = "flex";
        springRollImageHolder1.style.width = "25%";
        springRollImageHolder1.style.left = "0%";
        springRollImageHolder1.style.position = "relative";
        springRollImageHolder1.style.transform = "translate(0%, 0%)";
        springRollImageHolder1.style.margin = "50px";
        springRollImageHolder1.style.marginTop = "0px";
    }
}

function porkCheckContent(){
    width = window.innerWidth;
    var porkHolder = document.getElementById("pork-holder-container");
    var porkImageHolder1 = document.getElementById("pork-image-holder-1");
    var porkImageHolder2 = document.getElementById("pork-image-holder-2");
    var porkImageHolder3 = document.getElementById("pork-image-holder-3");
    if(width < 1000){
        backToHomeMenu.style.marginTop = "120px";
        backToHomeMenu.style.left = "70%";
        categoryContainer.style.display = "none";
        porkHolder.style.display = "block";
        porkImageHolder1.style.width = "70%";
        porkImageHolder1.style.left = "50%";
        porkImageHolder1.style.position = "relative";
        porkImageHolder1.style.transform = "translate(-50%, 0%)";
        porkImageHolder1.style.margin = "0px";
        porkImageHolder1.style.marginTop = "50px";

        porkImageHolder2.style.width = "70%";
        porkImageHolder2.style.left = "50%";
        porkImageHolder2.style.position = "relative";
        porkImageHolder2.style.transform = "translate(-50%, 0%)";
        porkImageHolder2.style.margin = "0px";
        porkImageHolder2.style.marginTop = "50px";

        porkImageHolder3.style.width = "70%";
        porkImageHolder3.style.left = "50%";
        porkImageHolder3.style.position = "relative";
        porkImageHolder3.style.transform = "translate(-50%, 0%)";
        porkImageHolder3.style.margin = "0px";
        porkImageHolder3.style.marginTop = "50px";
    }
    else{
        backToHomeMenu.style.marginTop = "230px";
        backToHomeMenu.style.left = "80%";
        categoryContainer.style.display = "block";
        porkHolder.style.display = "flex";
        porkImageHolder1.style.width = "25%";
        porkImageHolder1.style.left = "0%";
        porkImageHolder1.style.position = "relative";
        porkImageHolder1.style.transform = "translate(0%, 0%)";
        porkImageHolder1.style.margin = "50px";
        porkImageHolder1.style.marginTop = "0px";

        porkImageHolder2.style.width = "25%";
        porkImageHolder2.style.left = "0%";
        porkImageHolder2.style.position = "relative";
        porkImageHolder2.style.transform = "translate(0%, 0%)";
        porkImageHolder2.style.margin = "50px";
        porkImageHolder2.style.marginTop = "0px";

        porkImageHolder3.style.width = "25%";
        porkImageHolder3.style.left = "0%";
        porkImageHolder3.style.position = "relative";
        porkImageHolder3.style.transform = "translate(0%, 0%)";
        porkImageHolder3.style.margin = "50px";
        porkImageHolder3.style.marginTop = "0px";
    }
}

function checkContent(){
    width = window.innerWidth;
    var chickenHolder = document.getElementById("chicken-holder");
    var chickenImageHolder1 = document.getElementById("chicken-image-holder-1");
    var chickenImageHolder2 = document.getElementById("chicken-image-holder-2");
    var chickenImageHolder3 = document.getElementById("chicken-image-holder-3");
    if(width < 1000){
        backToHomeMenu.style.marginTop = "120px";
        backToHomeMenu.style.left = "70%";
        categoryContainer.style.display = "none";
        chickenHolder.style.display = "block";
        chickenImageHolder1.style.width = "70%";
        chickenImageHolder1.style.left = "50%";
        chickenImageHolder1.style.position = "relative";
        chickenImageHolder1.style.transform = "translate(-50%, 0%)";
        chickenImageHolder1.style.margin = "0px";
        chickenImageHolder1.style.marginTop = "50px";

        chickenImageHolder2.style.width = "70%";
        chickenImageHolder2.style.left = "50%";
        chickenImageHolder2.style.position = "relative";
        chickenImageHolder2.style.transform = "translate(-50%, 0%)";
        chickenImageHolder2.style.margin = "0px";
        chickenImageHolder2.style.marginTop = "50px";

        chickenImageHolder3.style.width = "70%";
        chickenImageHolder3.style.left = "50%";
        chickenImageHolder3.style.position = "relative";
        chickenImageHolder3.style.transform = "translate(-50%, 0%)";
        chickenImageHolder3.style.margin = "0px";
        chickenImageHolder3.style.marginTop = "50px";
    }
    else{
        backToHomeMenu.style.marginTop = "230px";
        backToHomeMenu.style.left = "80%";
        categoryContainer.style.display = "block";
        chickenHolder.style.display = "flex";
        chickenImageHolder1.style.width = "25%";
        chickenImageHolder1.style.left = "0%";
        chickenImageHolder1.style.position = "relative";
        chickenImageHolder1.style.transform = "translate(0%, 0%)";
        chickenImageHolder1.style.margin = "50px";
        chickenImageHolder1.style.marginTop = "0px";

        chickenImageHolder2.style.width = "25%";
        chickenImageHolder2.style.left = "0%";
        chickenImageHolder2.style.position = "relative";
        chickenImageHolder2.style.transform = "translate(0%, 0%)";
        chickenImageHolder2.style.margin = "50px";
        chickenImageHolder2.style.marginTop = "0px";

        chickenImageHolder3.style.width = "25%";
        chickenImageHolder3.style.left = "0%";
        chickenImageHolder3.style.position = "relative";
        chickenImageHolder3.style.transform = "translate(0%, 0%)";
        chickenImageHolder3.style.margin = "50px";
        chickenImageHolder3.style.marginTop = "0px";
    }
}