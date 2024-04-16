window.addEventListener("resize", monitorCheck);

function monitorCheck(){
    var width = window.innerWidth;
    var contentContainer = document.getElementById("content-container");
    var leftSideContainer = document.getElementById("left-side-container");
    var rightSideContainer = document.getElementById("right-side-container");
    var closeButtonContainer = document.getElementById("close-button-container");
    if(width < 1000){
        contentContainer.style.display = "block";
        leftSideContainer.style.width = "100%"
        leftSideContainer.style.borderTopRightRadius = "50px";
        leftSideContainer.style.borderBottomLeftRadius = "0px";

        rightSideContainer.style.width = "100%";
        rightSideContainer.style.borderTopRightRadius = "0px";
        rightSideContainer.style.borderBottomLeftRadius = "50px";
        rightSideContainer.style.paddingBottom = "20px";

        closeButtonContainer.style.position = "fixed";
        closeButtonContainer.style.zIndex = "2";
        closeButtonContainer.style.left = "100%";
        closeButtonContainer.style.transform = "translate(-150%, 0%)";
        closeButtonContainer.style.top = "10px";
    }
    else{
        contentContainer.style.display = "flex";
        contentContainer.style.overflow = "hidden";
        leftSideContainer.style.width = "50%"
        leftSideContainer.style.borderTopRightRadius = "0px";
        leftSideContainer.style.borderBottomLeftRadius = "50px";

        rightSideContainer.style.width = "50%";
        rightSideContainer.style.borderTopRightRadius = "50px";
        rightSideContainer.style.borderBottomLeftRadius = "0px";
        rightSideContainer.style.paddingBottom = "0px";

        closeButtonContainer.style.position = "relative";
        closeButtonContainer.style.zIndex = "2";
        closeButtonContainer.style.left = "0%";
        closeButtonContainer.style.transform = "translate(-0%, 0%)";
        closeButtonContainer.style.top = "0px";
    }
}