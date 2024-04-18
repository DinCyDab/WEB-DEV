var isHidden = true;

function showHidden(){
    var hiddenProfile = document.getElementById("hidden-profile");
    if(isHidden){
        hiddenProfile.style.opacity = 1;
        hiddenProfile.style.pointerEvents = "all";
    }
    else{
        hiddenProfile.style.opacity = 0;
        hiddenProfile.style.pointerEvents = "none";
    }
    isHidden = !isHidden;
}