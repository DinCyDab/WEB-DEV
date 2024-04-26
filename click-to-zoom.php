<?php
    $current_url = basename($_SERVER["PHP_SELF"]);
    if($current_url == "index.php"){
        $setPage = "onclick=\"goToBranch(); closeZoom()\"";
    }
    else{
        $setPage = "href=\"index.php#located-content-locator\"";
    }

    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    if(isset($_SESSION['firstname'])){
        $username = "<form class=\"form-sign-in\" method=\"post\">
        <div class=\"sign-in-left\">
            <input class=\"input-number\" id=\"input-number\" type=\"number\" min=\"0\" value=\"1\" name=\"qty\">
        </div>
        <div class=\"sign-in-right\">
            <input class=\"add-to-cart-button\" id=\"add-to-cart-button\" type=\"submit\" value=\"ADD TO CART\" name=\"default\">
        </div>
    </form>";
    }
    else{
        $username = "<div class=\"sign-in-to-order\" onclick=\"window.location.href='login.php'\">
        <h4>Sign in to Order</h4>
    </div><div id=\"add-to-cart-button\"></div>";
    }
    $_SESSION["product1"] = "Roasted Chicken";
    $_SESSION["product2"] = "Chicken Sisig";
    $_SESSION["product3"] = "Fried Chicken";
    $_SESSION["product4"] = "Pork Liempo";
    $_SESSION["product5"] = "Pork Belly";
    $_SESSION["product6"] = "Pork Sisig";
    $_SESSION["product7"] = "Chicken Spring Roll";
    $_SESSION["product8"] = "Atchara";
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

    .add-to-cart-button{
        position: relative;
        left: 20%;
        top: 50%;
        background-color: #004AAD;
        color: white;
        border-radius: 50px;
        transform: translate(-50%, -50%);
        padding: 10px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        cursor: pointer;
    }
    
    .form-sign-in{
        width: 100%;
        height: 100px;
        display: flex;
        /* border: 1px black solid; */
    }
    
    .sign-in-left{
        /* border: 1px red solid; */
        width: 60%;
        height: 100px;
    }

    .sign-in-right{
        /* border: 1px red solid; */
        width: 40%;
        height: 100px;
    }

    .input-number{
        position: relative;
        left:60%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        font-size: 20px;
        border-radius: 50px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .sign-in-to-order{
        position: relative;
        width: 150px;
        height: 50px;
        background-color: #004AAD;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50px;
        color: white;
        cursor: pointer;
    }

    .sign-in-to-order h4{
        position: relative;
        text-align: center;
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
                <?php echo "$username";?>
            </div>
            <h6>To Place Your Order: Dial<space style="color:red"> +63 962 207 9430 </space>or visit our nearest
                <a style="color: red; cursor: pointer; text-decoration: underline;" <?php echo $setPage ?>>branch</a>
                (10:00AM - 7:00PM)</h6>
        </div>
    </div>
    <div class="space-bottom-close" onclick="closeZoom()"></div>
</div>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["1"])){
            $_SESSION["product1qty"] = $_POST["qty"];
        }
        if(isset($_POST["2"])){
            $_SESSION["product2qty"] = $_POST["qty"];
        }
        if(isset($_POST["3"])){
            $_SESSION["product3qty"] = $_POST["qty"];
        }
        if(isset($_POST["4"])){
            $_SESSION["product4qty"] = $_POST["qty"];
        }
        if(isset($_POST["5"])){
            $_SESSION["product5qty"] = $_POST["qty"];
        }
        if(isset($_POST["6"])){
            $_SESSION["product6qty"] = $_POST["qty"];
        }
        if(isset($_POST["7"])){
            $_SESSION["product7qty"] = $_POST["qty"];
        }
        if(isset($_POST["8"])){
            $_SESSION["product8qty"] = $_POST["qty"];
        }
    }
?>

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