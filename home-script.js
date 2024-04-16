window.addEventListener("resize", changeImageSize);

var width;

function changeImageSize(){
    width = window.innerWidth;
    var image1 = document.getElementById("chicken-image-holder-1");
    var image2 = document.getElementById("pork-image-holder-1");
    var image3 = document.getElementById("spring-roll-image-holder-1");
    var image4 = document.getElementById("pork-image-holder-2");

    if(width >= 0 && width <= 500){
        image1.style.width = "100%";
        image2.style.display = "none";
        image3.style.display = "none";
        image4.style.display = "none";
    }
    else if(width > 500 && width < 1000){
        image1.style.width = "50%";
        image2.style.width = "50%";
        image2.style.display = "block";
        image3.style.display = "none";
        image4.style.display = "none";
    }
    else{
        image1.style.width = "25%";
        image2.style.width = "25%";
        image2.style.display = "block";
        image3.style.display = "block";
        image4.style.display = "block";
    }
}

