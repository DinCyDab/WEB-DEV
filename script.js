window.addEventListener("resize", checkMonitorWidth);
window.addEventListener("resize", checkFooter);

var width = window.innerWidth;

function checkMonitorWidth(){
    width = window.innerWidth;
    var rightSide = document.getElementById("right-side");
    var leftSide = document.getElementById("left-side");
    var leftSideImg = document.getElementById("left-side-img");
    var sideMenuIcon = document.getElementById("side-menu-icon");
    var sideMenuContainer = document.getElementById("side-menu-container");
    if(width < 1000){
        leftSide.style.width = "100%";
        leftSide.style.marginLeft = "0px";
        leftSideImg.style.position = "absolute";
        leftSideImg.style.left = "50%";
        leftSideImg.style.transform = "translate(-50%, 0%)";
        rightSide.style.display = "none";
        sideMenuIcon.style.display = "block";
    }
    else{
        rightSide.style.display = "flex";
        leftSide.style.width = "135px";
        leftSide.style.marginLeft = "100px";
        leftSideImg.style.position = "relative";
        leftSideImg.style.left = "0";
        leftSideImg.style.transform = "translate(0%, 0%)";
        sideMenuIcon.style.display = "none";
        sideMenuContainer.style.display = "none";
        if(x == true){
            x = !x;
        }
    }
}

var x = false;

function sideMenu(){
    var sideMenuContainer = document.getElementById("side-menu-container");
    if(x == false){
        sideMenuContainer.style.display = "block"
        x = true;
    }
    else{
        sideMenuContainer.style.display = "none"
        x = false;
    }
}

function checkFooter(){
    width = window.innerWidth;
    var footer = document.getElementById("footer");
    var locationContainer = document.getElementById("location-container");
    var keepInTouchCountainer = document.getElementById("keep-in-touch-countainer");
    var quickLinksContainer = document.getElementById("quick-links-container");
    var orderNowContainer = document.getElementById("order-now-container");
    if(width <= 550){
        footer.style.display = "block";

        locationContainer.style.width = "100%";
        locationContainer.style.textAlign = "center";
        keepInTouchCountainer.style.width = "100%";
        keepInTouchCountainer.style.textAlign = "center";
        quickLinksContainer.style.width = "100%";
        quickLinksContainer.style.textAlign = "center";
        orderNowContainer.style.width = "100%";
        orderNowContainer.style.textAlign = "center";
    }
    else{
        footer.style.display = "flex";

        locationContainer.style.width = "25%";
        locationContainer.style.textAlign = "left";
        keepInTouchCountainer.style.width = "25%";
        keepInTouchCountainer.style.textAlign = "left";
        quickLinksContainer.style.width = "25%";
        quickLinksContainer.style.textAlign = "left";
        orderNowContainer.style.width = "25%";
        orderNowContainer.style.textAlign = "left";
    }
}