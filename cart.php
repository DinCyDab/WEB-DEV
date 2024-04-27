<?php 
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    $productA = "";
    $productAqty = "";
    $productB = "";
    $productBqty = "";
    $productC = "";
    $productCqty = "";
    $productD = "";
    $productDqty = "";
    $productE = "";
    $productEqty = "";
    $productF = "";
    $productFqty = "";
    $productG = "";
    $productGqty = "";
    $productH = "";
    $productHqty = "";
    $total = 0;

    if(isset($_SESSION["product1qty"])){
        $productA = "<input type=\"submit\" value=\"Delete\" name=\"deleteA\" onclick=removeItem(\"deleteA\")>" . $_SESSION["product1"] . ":";
        $productAqty = $_SESSION["product1qty"];
        $total += ($productAqty * 270);
        $productAqty = "<input id=\"productA\" type=\"number\" value=\"$productAqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productA\", \"A\")' onmouseup=\"updateTotal()\"><br>";
    }

    if(isset($_SESSION["product2qty"])){
        $productB = "<input type=\"submit\" value=\"Delete\" name=\"deleteB\" onclick=removeItem(\"deleteB\")>" . $_SESSION["product2"] . ":";
        $productBqty = $_SESSION["product2qty"];
        $total += ($productBqty * 250);
        $productBqty = "<input id=\"productB\" type=\"number\" value=\"$productBqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productB\", \"B\")' onmouseup=\"updateTotal()\"><br>";
    }

    if(isset($_SESSION["product3qty"])){
        $productC = "<input type=\"submit\" value=\"Delete\" name=\"deleteC\" onclick=removeItem(\"deleteC\")>" . $_SESSION["product3"] . ":";
        $productCqty = $_SESSION["product3qty"];
        $total += ($productCqty * 40);
        $productCqty = "<input id=\"productC\" type=\"number\" value=\"$productCqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productC\", \"C\")'><br>";
    }

    if(isset($_SESSION["product4qty"])){
        $productD = "<input type=\"submit\" value=\"Delete\" name=\"deleteD\" onclick=removeItem(\"deleteD\")>" . $_SESSION["product4"] . ":";
        $productDqty = $_SESSION["product4qty"];
        $total += ($productDqty * 280);
        $productDqty = "<input id=\"productD\" type=\"number\" value=\"$productDqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productD\", \"D\")'><br>";
    }

    if(isset($_SESSION["product5qty"])){
        $productE = "<input type=\"submit\" value=\"Delete\" name=\"deleteE\" onclick=removeItem(\"deleteE\")>" . $_SESSION["product5"] . ":";
        $productEqty = $_SESSION["product5qty"];
        $total += ($productEqty * 900);
        $productEqty = "<input id=\"productE\" type=\"number\" value=\"$productEqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productE\", \"E\")'><br>";
    }

    if(isset($_SESSION["product6qty"])){
        $productF = "<input type=\"submit\" value=\"Delete\" name=\"deleteF\" onclick=removeItem(\"deleteF\")>" . $_SESSION["product6"] . ":";
        $productFqty = $_SESSION["product6qty"];
        $total += ($productFqty * 250);
        $productFqty = "<input id=\"productF\" type=\"number\" value=\"$productFqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productF\", \"F\")'><br>";
    }

    if(isset($_SESSION["product7qty"])){
        $productG = "<input type=\"submit\" value=\"Delete\" name=\"deleteG\" onclick=removeItem(\"deleteG\")>" . $_SESSION["product7"] . ":";
        $productGqty = $_SESSION["product7qty"];
        $total += ($productGqty * 10);
        $productGqty = "<input id=\"productG\" type=\"number\" value=\"$productGqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productG\", \"G\")'><br>";
    }

    if(isset($_SESSION["product8qty"])){
        $productH = "<input type=\"submit\" value=\"Delete\" name=\"deleteH\" onclick=removeItem(\"deleteH\")>" . $_SESSION["product8"] . ":";
        $productHqty = $_SESSION["product8qty"];
        $total += ($productHqty * 40);
        $productHqty = "<input id=\"productH\" type=\"number\" value=\"$productHqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productH\", \"H\")'><br>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
        <style>
            .cart-form{
                width: 100%;
                height: auto;
            }
            .cart-form-container{
                position: relative;
                background-color: rgba(255, 255, 255, .4);
                width: 85%;
                height: auto;
                left: 50%;
                transform: translate(-50%, 0%);
                border-radius: 50px;
                padding: 50px;
                padding-top: 20px;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body onload="checkMonitorWidth(); checkFooter()" style="background-color: #004AAD;">
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content">
            <div class="back-to-home-container">
                <div class="back-to-home" id="back-to-home">
                    <a href="index.php">
                        <p>Back To Home</p>
                    </a>
                </div>
            </div>
            <div class="contact-us-header-container">
                <div class="contact-us-header">
                    <h2 style="font-family: ChunkFive; color: red; letter-spacing: 5px;">
                    CART</h2>
                </div>
            </div>
            <div class="cart-form-container">
                <form class="cart-form" id="cart-form" method="post" onkeydown="checkForm()">
                    <?php 
                        if($total == 0){
                            echo "CART IS EMPTY";
                        }

                        echo $productA;
                        echo $productAqty;
                    ?>
                    <?php echo $productB;
                        echo $productBqty;
                    ?>
                    <?php echo $productC;
                        echo $productCqty;
                    ?>
                    <?php echo $productD;
                        echo $productDqty;
                    ?>
                    <?php echo $productE;
                        echo $productEqty;
                    ?>
                    <?php echo $productF;
                        echo $productFqty;
                    ?>
                    <?php echo $productG;
                        echo $productGqty;
                    ?>
                    <?php echo $productH;
                        echo $productHqty;
                    ?>
                    <br><br>
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            if(isset($_POST["qtyproductA"])){
                                $_SESSION["product1qty"] = $_POST["qtyproductA"];
                            }
                            if(isset($_POST["qtyproductB"])){
                                $_SESSION["product2qty"] = $_POST["qtyproductB"];
                            }
                            if(isset($_POST["qtyproductC"])){
                                $_SESSION["product3qty"] = $_POST["qtyproductC"];
                            }
                            if(isset($_POST["qtyproductD"])){
                                $_SESSION["product4qty"] = $_POST["qtyproductD"];
                            }
                            if(isset($_POST["qtyproductE"])){
                                $_SESSION["product5qty"] = $_POST["qtyproductE"];
                            }
                            if(isset($_POST["qtyproductF"])){
                                $_SESSION["product6qty"] = $_POST["qtyproductF"];
                            }
                            if(isset($_POST["qtyproductG"])){
                                $_SESSION["product7qty"] = $_POST["qtyproductG"];
                            }
                            if(isset($_POST["qtyproductH"])){
                                $_SESSION["product8qty"] = $_POST["qtyproductH"];
                            }

                            if(isset($_POST["deleteA"])){
                                unset($_SESSION["product1qty"]);
                            }
                            elseif(isset($_POST["deleteB"])){
                                unset($_SESSION["product2qty"]);
                            }
                            elseif(isset($_POST["deleteC"])){
                                unset($_SESSION["product3qty"]);
                            }
                            elseif(isset($_POST["deleteD"])){
                                unset($_SESSION["product4qty"]);
                            }
                            elseif(isset($_POST["deleteE"])){
                                unset($_SESSION["product5qty"]);
                            }
                            elseif(isset($_POST["deleteF"])){
                                unset($_SESSION["product6qty"]);
                            }
                            elseif(isset($_POST["deleteG"])){
                                unset($_SESSION["product7qty"]);
                            }
                            elseif(isset($_POST["deleteH"])){
                                unset($_SESSION["product8qty"]);
                            }
                        }

                        if($total != 0){
                            echo "<p id=\"total\" value=$total>TOTAL: ₱" . $total . ".00</p>" . "<input type=\"submit\" value=\"Check Out\">";
                        }
                    ?>
                </form>
            </div>
            <div class="space-bottom"></div>
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
    <script src="script.js"></script>
    <script>
        function updateTotal() {
        var productAqty = document.getElementById("productA");
        var productBqty = document.getElementById("productB");
        var productCqty = document.getElementById("productC");
        var productDqty = document.getElementById("productD");
        var productEqty = document.getElementById("productE");
        var productFqty = document.getElementById("productF");
        var productGqty = document.getElementById("productG");
        var productHqty = document.getElementById("productH");
        var total = 0;

        if(productAqty != null){
            productAqty = parseInt(productAqty.value);
            total += (productAqty * 270);
        }
        if(productBqty != null){
            productBqty = parseInt(productBqty.value);
            total += (productBqty * 250);
        }
        if(productCqty != null){
            productCqty = parseInt(productCqty.value);
            total += (productCqty * 40);
        }
        if(productDqty != null){
            productDqty = parseInt(productDqty.value);
            total += (productDqty * 280);
        }
        if(productEqty != null){
            productEqty = parseInt(productEqty.value);
            total += (productEqty * 900);
        }
        if(productFqty != null){
            productFqty = parseInt(productFqty.value);
            total += (productFqty * 250);
        }
        if(productGqty != null){
            productGqty = parseInt(productGqty.value);
            total += (productGqty * 10);
        }
        if(productHqty != null){
            productHqty = parseInt(productHqty.value);
            total += (productHqty * 40);
        }
        document.getElementById("total").innerHTML = "TOTAL: ₱" + total.toFixed(2);
    }

        function changeValue(productID, prodLetter){
            var product = document.getElementById(productID).value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("qtyproduct"+ prodLetter +"=" + product);
            updateTotal();
        }

        function removeItem(product){
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(product);
            updateTotal();
        }

        function checkForm(){
            if (event.key == "Enter") {
                event.preventDefault();
            }
        }

    </script>
</html>