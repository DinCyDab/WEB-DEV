window.addEventListener("keydown", checkKeyPress);

function checkKeyPress(event){
    if(event.code == "Escape"){
        closeZoom();
    }
}

function zoomClicked(headerName, priceInfo, imageSource, itemInfo, productID){
    var clickToZoom = document.getElementById("click-to-zoom");
    var title = document.getElementById("header-name");
    var price = document.getElementById("price-info");
    var image = document.getElementById("image-source");
    var itemDetails = document.getElementById("item-info");
    var addToCartButton = document.getElementById("add-to-cart-button");
    var inputNumber = document.getElementById("input-number");

    title.innerHTML = headerName;
    price.innerHTML = priceInfo;
    image.src = imageSource;
    itemDetails.innerHTML = itemInfo;
    clickToZoom.style.opacity = "1";
    clickToZoom.style.pointerEvents = "all";
    clickToZoom.style.width = "100%";
    document.body.style.overflow = "hidden";

    addToCartButton.setAttribute('name', productID);
}

function closeZoom(){
    var clickToZoom = document.getElementById("click-to-zoom");
    clickToZoom.style.opacity = "0";
    clickToZoom.style.width = "0%";
    clickToZoom.style.pointerEvents = "none";
    document.body.style.overflow = "auto";
}