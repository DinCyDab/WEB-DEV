<?php
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }  
    if(isset($_SESSION['firstname'])){
        $username = "ADD TO CART";
        $setRef = "";
        $setInput = "<input type='number'>";
    }
    else{
        $username = "SIGN IN TO ORDER";
        $setRef = "onclick='window.location.href=\"login.php\"'";
        $setInput = "";
    }
?>

<div class="background-error-container" id="background-error-container" onclick="closeError()">
    <div class="error-container">
        <h4>ADDED TO CART SUCCESSFULLY</h4>
        <p>click anywhere to close</p>
    </div>
</div>

<style>
    .background-error-container{
        z-index: 5;
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .3);
        cursor: pointer;
        display: none;
    }
    .error-container{
        position: relative;
        width: 200px;
        height: 100px;
        background-color: rgba(255, 255, 255, .9);
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 25px;
        pointer-events: none;
    }
    .error-container h4{
        color: black;
        text-align: center;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        font-family: ChunkFive;
        letter-spacing: 2px;
    }
    .error-container p{
        text-decoration: underline;
        color: red;
        text-align: center;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>

<div class="click-to-zoom" id="click-to-zoom">
    <div class="close-button-container" id="close-button-container" onclick="closeZoom()">
        <img onclick="closeZoom()" src="imagesource/close.png">
    </div>
    <div class="content-container" id="content-container">
        <div class="left-side-container" id="left-side-container">
            <img id="image-source" src="imagesource/roasted-chicken.jpg">
        </div>
        <div class="right-side-container" id="right-side-container">
            <h2 id="header-name">Header</h2>
            <h3 id="price-info">Price</h3>
            <p>Item details:</p>
            <p id="item-info"></p>
            <div class="signin-container">
                <div class="signin" id="signin" <?php echo $setRef ?> onclick="addProduct()">
                    <p>
                        <?php 
                            echo "$username";
                        ?>
                    </p>
                </div>
                <?php echo $setInput ?>
            </div>
            <h6>To Place Your Order: Dial<space style="color:red"> +63 962 207 9430 </space>or visit our nearest
                <a style="color: red; cursor: pointer; text-decoration: underline;" onclick="goToBranch(); closeZoom()">branch</a>
                (10:00AM - 7:00PM)</h6>
        </div>
    </div>
    <div class="space-bottom-close" onclick="closeZoom()"></div>
</div>

<script>
    var backgroundErrorContainer = document.getElementById("background-error-container");
    function closeError(){
        backgroundErrorContainer.style.display = "none";
    }
    
    function addProduct(){
        var backG = document.getElementById("background-error-container");
        backG.style.display = "block";
    }
</script>