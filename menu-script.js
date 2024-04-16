addEventListener("scroll", categoryDesign);
addEventListener("resize", locateContents);
addEventListener("scroll", checkWidth);
addEventListener("resize", checkWidth);

var chickenLocator = document.getElementById("chicken-locator");
var porkLocator = document.getElementById("pork-locator");
var springRollLocator = document.getElementById("spring-roll-locator");
var othersLocator = document.getElementById("others-locator");
var banner = document.getElementById("banner");
var category = document.getElementById("category-container");
var heightDifference;

function checkWidth(){
    var scrollLocation = window.scrollY;
    var categoryContainer = document.getElementById("category-container");
    var chickenPopUpContainer = document.getElementById("chicken-pop-up-container");
    var popUpHeader = document.getElementById("pop-up-header");
    // categoryContainer.style.backgroundColor = "rgba(255,255,255," + scrollLocation/100 + ")";
    //If width is greater than 1000 pixels, don't show pop-up-container
    if(window.innerWidth > 1000){
        chickenPopUpContainer.style.display = "none";
        return;
    }
    else{
        chickenPopUpContainer.style.display = "block";
    }
    //Show pop-up header
    if(scrollLocation+banner.offsetHeight >= chickenLocator.offsetTop){
        chickenPopUpContainer.style.opacity = "1";
    }
    else{
        chickenPopUpContainer.style.opacity = "0";
    }
    //Change pop-up header
    if(scrollLocation+banner.offsetHeight >= chickenLocator.offsetTop && scrollLocation+banner.offsetHeight < porkLocator.offsetTop){
        popUpHeader.innerHTML = "Chicken";
    }
    else if(scrollLocation+banner.offsetHeight >= porkLocator.offsetTop && scrollLocation+banner.offsetHeight < springRollLocator.offsetTop){
        popUpHeader.innerHTML = "Pork";
    }
    else if(scrollLocation+banner.offsetHeight >= springRollLocator.offsetTop && scrollLocation+banner.offsetHeight < othersLocator.offsetTop){
        popUpHeader.innerHTML = "Spring Roll";
    }
    else if(scrollLocation+banner.offsetHeight >= othersLocator.offsetTop){
        popUpHeader.innerHTML = "Others";
    }
}

function locateContents(){
    chickenLocator.offsetTop;
    porkLocator.offsetTop;
    springRollLocator.offsetTop;
    othersLocator.offsetTop;
    heightDifference = banner.offsetHeight + category.offsetHeight + 200;
}

var chickenContentContainer = document.getElementById("chicken-content-container");
chickenContentContainer.addEventListener("mouseover", changeColorChicken);
chickenContentContainer.addEventListener("mouseleave", defaultColorChicken);
function changeColorChicken(){
    chickenContentContainer.style.backgroundColor = "orange";
}
function defaultColorChicken(){
    var scrollLocation = window.scrollY;
    if(scrollLocation >= 0 && scrollLocation < chickenLocator.offsetTop + chickenLocator.offsetHeight-heightDifference){
        chickenContentContainer.style.backgroundColor = "#d75c05";
    }
    else{
        chickenContentContainer.style.backgroundColor = "#004badcb";
    }
}

var porkContentContainer = document.getElementById("pork-content-container");
porkContentContainer.addEventListener("mouseover", changeColorPork);
porkContentContainer.addEventListener("mouseleave", defaultColorPork);
function changeColorPork(){
    porkContentContainer.style.backgroundColor = "orange";
}
function defaultColorPork(){
    var scrollLocation = window.scrollY;
    if(scrollLocation >= chickenLocator.offsetTop + chickenLocator.offsetHeight-heightDifference && scrollLocation < porkLocator.offsetTop + porkLocator.offsetHeight-heightDifference){
        porkContentContainer.style.backgroundColor = "#d75c05";
    }
    else{
        porkContentContainer.style.backgroundColor = "#004badcb";
    }
}

var springRollContentContainer = document.getElementById("spring-roll-content-container");
springRollContentContainer.addEventListener("mouseover", changeColorSpringRoll);
springRollContentContainer.addEventListener("mouseleave", defaultColorSpringRoll);
function changeColorSpringRoll(){
    springRollContentContainer.style.backgroundColor = "orange";
}
function defaultColorSpringRoll(){
    var scrollLocation = window.scrollY;
    if(scrollLocation >= porkLocator.offsetTop + porkLocator.offsetHeight-heightDifference && scrollLocation < springRollLocator.offsetTop + springRollLocator.offsetHeight-heightDifference){
        springRollContentContainer.style.backgroundColor = "#d75c05";
    }
    else{
        springRollContentContainer.style.backgroundColor = "#004badcb";
    }
}

var othersContentContainer = document.getElementById("others-content-container");
othersContentContainer.addEventListener("mouseover", changeColorOthers);
othersContentContainer.addEventListener("mouseleave", defaultColorOthers);
function changeColorOthers(){
    othersContentContainer.style.backgroundColor = "orange";
}
function defaultColorOthers(){
    var scrollLocation = window.scrollY;
    if(scrollLocation >= springRollLocator.offsetTop + springRollLocator.offsetHeight-heightDifference){
        othersContentContainer.style.backgroundColor = "#d75c05";
    }
    else{
        othersContentContainer.style.backgroundColor = "#004badcb";
    }
}

function categoryDesign(){
    var scrollLocation = window.scrollY;
    var categoryContainer = document.getElementById("category-container");
    // categoryContainer.style.backgroundColor = "rgba(255,255,255," + scrollLocation/100 + ")";
    if(scrollLocation >= 0 && scrollLocation < chickenLocator.offsetTop + chickenLocator.offsetHeight-heightDifference){
        //ACTIVATED
        chickenContentContainer.style.backgroundColor = "#d75c05";
        chickenContentContainer.style.color = "white";
        //DEACTIVATED
        porkContentContainer.style.backgroundColor = "#004badcb";
        porkContentContainer.style.color = "black";
        springRollContentContainer.style.backgroundColor = "#004badcb";
        springRollContentContainer.style.color = "black";
        othersContentContainer.style.backgroundColor = "#004badcb";
        othersContentContainer.style.color = "black";
    }
    else if(scrollLocation >= chickenLocator.offsetTop + chickenLocator.offsetHeight-heightDifference && scrollLocation < porkLocator.offsetTop + porkLocator.offsetHeight-heightDifference){
        //ACTIVATED
        porkContentContainer.style.backgroundColor = "#d75c05";
        porkContentContainer.style.color = "white";
        //DEACTIVATED
        chickenContentContainer.style.backgroundColor = "#004badcb";
        chickenContentContainer.style.color = "black";
        springRollContentContainer.style.backgroundColor = "#004badcb";
        springRollContentContainer.style.color = "black";
        othersContentContainer.style.backgroundColor = "#004badcb";
        othersContentContainer.style.color = "black";
    }
    else if(scrollLocation >= porkLocator.offsetTop + porkLocator.offsetHeight-heightDifference && scrollLocation < springRollLocator.offsetTop + springRollLocator.offsetHeight-heightDifference){
        //ACTIVATED
        springRollContentContainer.style.backgroundColor = "#d75c05";
        springRollContentContainer.style.color = "white";
        //DEACTIVATED
        chickenContentContainer.style.backgroundColor = "#004badcb";
        chickenContentContainer.style.color = "black";
        porkContentContainer.style.backgroundColor = "#004badcb";
        porkContentContainer.style.color = "black";
        othersContentContainer.style.backgroundColor = "#004badcb";
        othersContentContainer.style.color = "black";
    }
    else if(scrollLocation >= springRollLocator.offsetTop + springRollLocator.offsetHeight-heightDifference){
        //ACTIVATED
        othersContentContainer.style.backgroundColor = "#d75c05";
        othersContentContainer.style.color = "white";
        //DEACTIVATED
        chickenContentContainer.style.backgroundColor = "#004badcb";
        chickenContentContainer.style.color = "black";
        porkContentContainer.style.backgroundColor = "#004badcb";
        porkContentContainer.style.color = "black";
        springRollContentContainer.style.backgroundColor = "#004badcb";
        springRollContentContainer.style.color = "black";
    }
}

function goToChicken(){
    if(lockChicken){
        return;
    }
    var currentScrollLocation = window.scrollY;
    var targetLocation = chickenLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation > targetLocation){
        if(currentScrollLocation - targetLocation <= 25){
            window.scrollTo(0, targetLocation);
            chickenUnlockScroll()
        }
        else{
            window.requestAnimationFrame(goToChicken);
            window.scrollTo(0, currentScrollLocation - 25);
        }
    }
    else if(currentScrollLocation < targetLocation){
        if(targetLocation - currentScrollLocation <= 25){
            window.scrollTo(0, targetLocation);
            chickenUnlockScroll()
        }
        else{
            window.requestAnimationFrame(goToChicken);
            window.scrollTo(0, currentScrollLocation + 25);
        }
    }
}

function goToPork(){
    if(lockPork){
        return;
    }
    var currentScrollLocation = window.scrollY;
    var targetLocation = porkLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation > targetLocation){
        if(currentScrollLocation - targetLocation <= 25){
            window.scrollTo(0, targetLocation);
            porkUnlockScroll();
        }
        else{
            window.requestAnimationFrame(goToPork);
            window.scrollTo(0, currentScrollLocation - 25);
        }
    }
    else if(currentScrollLocation < targetLocation){
        if(targetLocation - currentScrollLocation <= 25){
            window.scrollTo(0, targetLocation);
            porkUnlockScroll();
        }
        else{
            window.requestAnimationFrame(goToPork);
            window.scrollTo(0, currentScrollLocation + 25);
        }
    }
}

function goToSpringRoll(){
    if(lockSpringRoll){
        return;
    }
    var currentScrollLocation = window.scrollY;
    var targetLocation = springRollLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation > targetLocation){
        if(currentScrollLocation - targetLocation <= 25){
            window.scrollTo(0, targetLocation);
            springRollUnlockScroll();
        }
        else{
            window.requestAnimationFrame(goToSpringRoll);
            window.scrollTo(0, currentScrollLocation - 25);
        }
    }
    else if(currentScrollLocation < targetLocation){
        if(targetLocation - currentScrollLocation <= 25){
            window.scrollTo(0, targetLocation);
            springRollUnlockScroll()
        }
        else{
            window.requestAnimationFrame(goToSpringRoll);
            window.scrollTo(0, currentScrollLocation + 25);
        }
    }
}

function goToOthers(){
    if(lockOthers){
        return;
    }
    var currentScrollLocation = window.scrollY;
    var targetLocation = othersLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation > targetLocation){
        if(currentScrollLocation - targetLocation <= 25){
            window.scrollTo(0, targetLocation);
            othersUnlockScroll()
        }
        else{
            window.requestAnimationFrame(goToOthers);
            window.scrollTo(0, currentScrollLocation - 25);
        }
    }
    else if(currentScrollLocation < targetLocation){
        if(targetLocation - currentScrollLocation <= 25){
            window.scrollTo(0, targetLocation);
            othersUnlockScroll()
        }
        else{
            window.requestAnimationFrame(goToOthers);
            window.scrollTo(0, currentScrollLocation + 25);
        }
    }
}

var lockChicken = false;
var lockPork = false;
var lockOthers = false;
var lockSpringRoll = false;

function chickenLockScroll(){
    var currentScrollLocation = window.scrollY;
    var targetLocation = chickenLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation == targetLocation || lockChicken == true){
        return;
    }
    else{
        lockPork = true;
        lockOthers = true;
        lockSpringRoll = true;
    }
}

function chickenUnlockScroll(){
    lockPork = false;
    lockOthers = false;
    lockSpringRoll = false;
}

function porkLockScroll(){
    var currentScrollLocation = window.scrollY;
    var targetLocation = porkLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation == targetLocation || lockPork == true){
        return;
    }
    else{
        lockChicken = true;
        lockOthers = true;
        lockSpringRoll = true;
    }
}

function porkUnlockScroll(){
    lockChicken = false;
    lockOthers = false;
    lockSpringRoll = false;
}

function springRollLockScroll(){
    var currentScrollLocation = window.scrollY;
    var targetLocation = springRollLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation == targetLocation || lockSpringRoll == true){
        return;
    }
    else{
        lockChicken = true;
        lockOthers = true;
        lockPork = true;
    }
}

function springRollUnlockScroll(){
    lockChicken = false;
    lockOthers = false;
    lockPork = false;
}

function othersLockScroll(){
    var currentScrollLocation = window.scrollY;
    var targetLocation = othersLocator.offsetTop - (banner.offsetHeight + categoryContainer.offsetHeight);
    if(currentScrollLocation == targetLocation || lockOthers == true){
        return;
    }
    else{
        lockChicken = true;
        lockSpringRoll = true;
        lockPork = true;
    }
}

function othersUnlockScroll(){
    lockChicken = false;
    lockSpringRoll = false;
    lockPork = false;
}