window.addEventListener("resize", changeLocatedContent);

function changeLocatedContent(){
    var width = window.innerWidth;
    var locatedBranch1 = document.getElementById("located-branch-1");
    var locatedBranchImage1 = document.getElementById("located-branch-image-1");
    var rightBranch1 = document.getElementById("right-branch-1");
    var branch1Description = document.getElementById("branch-1-description");
    var locatedBranch2 = document.getElementById("located-branch-2");
    var locatedBranchImage2 = document.getElementById("located-branch-image-2");
    var leftBranch2 = document.getElementById("left-branch-2");
    var leftBranch2Hidden = document.getElementById("left-branch-2-hidden");
    var branch2Description = document.getElementById("branch-2-description");
    var locatedBranch3 = document.getElementById("located-branch-3");
    var locatedBranchImage3 = document.getElementById("located-branch-image-3");
    var rightBranch3 = document.getElementById("right-branch-3");
    var branch3Description = document.getElementById("branch-3-description");
    if(width<1000){
        locatedBranch1.style.display = "block";
        locatedBranch2.style.display = "block";
        locatedBranchImage1.style.width = "100%";
        locatedBranchImage2.style.width = "100%";
        rightBranch1.style.width = "100%";
        rightBranch1.style.textAlign = "center";

        branch1Description.style.textAlign = "center";
        branch1Description.style.marginLeft = "50px";

        leftBranch2.style.display = "none";
        leftBranch2Hidden.style.display = "block";
        leftBranch2Hidden.style.width = "100%";
        leftBranch2Hidden.style.marginLeft = "0px"

        branch2Description.style.marginLeft = "50px";
        branch2Description.style.marginRight = "50px";

        locatedBranch3.style.display = "block";
        locatedBranchImage3.style.width = "100%";
        rightBranch3.style.width = "100%";
        rightBranch3.style.textAlign = "center";
        rightBranch3.style.marginLeft = "0px";

        branch3Description.style.marginLeft = "50px"
        branch3Description.style.textAlign = "center";
    }
    else{
        locatedBranch1.style.display = "flex";
        locatedBranch2.style.display = "flex";
        locatedBranchImage1.style.width = "60%";
        locatedBranchImage2.style.width = "60%";
        rightBranch1.style.marginLeft = "0px";
        rightBranch1.style.width = "40%";
        rightBranch1.style.textAlign = "justify";

        branch1Description.style.textAlign = "justify";
        branch1Description.style.marginLeft = "0px";

        leftBranch2.style.display = "block";
        leftBranch2Hidden.style.display = "none";
        locatedBranch3.style.display = "flex";
        locatedBranchImage3.style.width = "60%";
        rightBranch3.style.width = "40%";
        rightBranch3.style.textAlign = "justify";

        branch3Description.style.marginLeft = "0px"
        branch3Description.style.textAlign = "justify";
    }
}