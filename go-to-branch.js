function goToBranch() {
    var locatedContentLocator = document.getElementById("located-content-locator");
    var banner = document.getElementById("banner");
    var currentScrollLocation = window.scrollY;
    var targetLocation = locatedContentLocator.offsetTop - banner.offsetHeight;
    if(currentScrollLocation < targetLocation){
        if(targetLocation - currentScrollLocation <= 25){
            window.scrollTo(0, targetLocation);
        }
        else{
            window.scrollTo(0, currentScrollLocation + 25);
            window.requestAnimationFrame(goToBranch);
        }
    }
    else if(currentScrollLocation > targetLocation){
        if(currentScrollLocation - targetLocation <= 25){
            window.scrollTo(0, targetLocation);
        }
        else{
            window.scrollTo(0, currentScrollLocation - 25);
            window.requestAnimationFrame(goToBranch);
        }
    }
}