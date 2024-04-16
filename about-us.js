window.addEventListener("resize", resizeContents);

function resizeContents(){
    var width = window.innerWidth;
    var introductionContentHolder = document.getElementById("introduction-content-holder");
    var leftSideIntroduction = document.getElementById("left-side-introduction");
    var rightSideIntroduction = document.getElementById("right-side-introduction");
    var missionContentHolder = document.getElementById("mission-content-holder");
    var leftSideMission = document.getElementById("left-side-mission");
    var leftSideMissionHidden = document.getElementById("left-side-mission-hidden");
    var rightSideMission = document.getElementById("right-side-mission");
    var visionContentHolder = document.getElementById("vision-content-holder");
    var leftSideVision = document.getElementById("left-side-vision");
    var rightSideVision = document.getElementById("right-side-vision");
    var backToHome = document.getElementById("back-to-home");
    if(width < 1000){
        introductionContentHolder.style.display = "block";
        leftSideIntroduction.style.width = "100%";
        leftSideIntroduction.style.margin = "0";
        rightSideIntroduction.style.width = "100%";
        rightSideIntroduction.style.margin = "0";

        rightSideIntroduction.style.textAlign = "center";
        rightSideIntroduction.style.textIndent = "0px"
        missionContentHolder.style.display = "block";
        leftSideMission.style.display = "none";
        leftSideMissionHidden.style.display = "block";
        leftSideMissionHidden.style.textAlign = "center";
        rightSideMission.style.width = "100%";
        rightSideMission.style.margin = "0";

        visionContentHolder.style.display = "block";
        leftSideVision.style.width = "100%";
        leftSideVision.style.margin = "0";
        rightSideVision.style.width = "100%";
        rightSideVision.style.margin = "0";
        rightSideVision.style.textAlign = "center";

        backToHome.style.left = "70%";
    }
    else{
        introductionContentHolder.style.display = "flex";
        leftSideIntroduction.style.width = "60%";
        leftSideIntroduction.style.margin = "20px";
        leftSideIntroduction.style.marginTop = "0px";
        rightSideIntroduction.style.width = "40%";
        rightSideIntroduction.style.margin = "20px";
        rightSideIntroduction.style.textAlign = "justify";
        rightSideIntroduction.style.textIndent = "20px"

        missionContentHolder.style.display = "flex";
        leftSideMission.style.display = "block";
        leftSideMission.style.textAlign = "justify";
        leftSideMissionHidden.style.display = "none";
        leftSideMissionHidden.style.textAlign = "justify";
        rightSideMission.style.width = "80%";
        rightSideMission.style.margin = "20px";

        visionContentHolder.style.display = "flex";
        leftSideVision.style.width = "60%";
        leftSideVision.style.margin = "20px";
        leftSideVision.style.marginTop = "0px";
        rightSideVision.style.width = "40%";
        rightSideVision.style.margin = "20px";
        rightSideVision.style.textAlign = "justify";
        rightSideVision.style.textIndent = "20px";

        backToHome.style.left = "80%";
    }
}