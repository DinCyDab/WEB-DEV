<?php
    ob_start();
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;

    }

    if(!isset($_SESSION["username"])){
        header("Location: login.php");
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
        $productAqty = "<input id=\"productA\" type=\"number\" value=\"$productAqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productA\", \"A\")' onmouseup=\"updateTotal()\"> <label id=\"prodASub\"></label><br>";
    }

    if(isset($_SESSION["product2qty"])){
        $productB = "<input type=\"submit\" value=\"Delete\" name=\"deleteB\" onclick=removeItem(\"deleteB\")>" . $_SESSION["product2"] . ":";
        $productBqty = $_SESSION["product2qty"];
        $total += ($productBqty * 250);
        $productBqty = "<input id=\"productB\" type=\"number\" value=\"$productBqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productB\", \"B\")' onmouseup=\"updateTotal()\"> <label id=\"prodBSub\"></label><br>";
    }

    if(isset($_SESSION["product3qty"])){
        $productC = "<input type=\"submit\" value=\"Delete\" name=\"deleteC\" onclick=removeItem(\"deleteC\")>" . $_SESSION["product3"] . ":";
        $productCqty = $_SESSION["product3qty"];
        $total += ($productCqty * 40);
        $productCqty = "<input id=\"productC\" type=\"number\" value=\"$productCqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productC\", \"C\")' onmouseup=\"updateTotal()\"> <label id=\"prodCSub\"></label><br>";
    }

    if(isset($_SESSION["product4qty"])){
        $productD = "<input type=\"submit\" value=\"Delete\" name=\"deleteD\" onclick=removeItem(\"deleteD\")>" . $_SESSION["product4"] . ":";
        $productDqty = $_SESSION["product4qty"];
        $total += ($productDqty * 280);
        $productDqty = "<input id=\"productD\" type=\"number\" value=\"$productDqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productD\", \"D\")' onmouseup=\"updateTotal()\"> <label id=\"prodDSub\"></label><br>";
    }

    if(isset($_SESSION["product5qty"])){
        $productE = "<input type=\"submit\" value=\"Delete\" name=\"deleteE\" onclick=removeItem(\"deleteE\")>" . $_SESSION["product5"] . ":";
        $productEqty = $_SESSION["product5qty"];
        $total += ($productEqty * 900);
        $productEqty = "<input id=\"productE\" type=\"number\" value=\"$productEqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productE\", \"E\")' onmouseup=\"updateTotal()\"> <label id=\"prodESub\"></label><br>";
    }

    if(isset($_SESSION["product6qty"])){
        $productF = "<input type=\"submit\" value=\"Delete\" name=\"deleteF\" onclick=removeItem(\"deleteF\")>" . $_SESSION["product6"] . ":";
        $productFqty = $_SESSION["product6qty"];
        $total += ($productFqty * 250);
        $productFqty = "<input id=\"productF\" type=\"number\" value=\"$productFqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productF\", \"F\")' onmouseup=\"updateTotal()\"> <label id=\"prodFSub\"></label><br>";
    }

    if(isset($_SESSION["product7qty"])){
        $productG = "<input type=\"submit\" value=\"Delete\" name=\"deleteG\" onclick=removeItem(\"deleteG\")>" . $_SESSION["product7"] . ":";
        $productGqty = $_SESSION["product7qty"];
        $total += ($productGqty * 10);
        $productGqty = "<input id=\"productG\" type=\"number\" value=\"$productGqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productG\", \"G\")' onmouseup=\"updateTotal()\"> <label id=\"prodGSub\"></label><br>";
    }

    if(isset($_SESSION["product8qty"])){
        $productH = "<input type=\"submit\" value=\"Delete\" name=\"deleteH\" onclick=removeItem(\"deleteH\")>" . $_SESSION["product8"] . ":";
        $productHqty = $_SESSION["product8qty"];
        $total += ($productHqty * 40);
        $productHqty = "<input id=\"productH\" type=\"number\" value=\"$productHqty\" min=\"1\" max=\"50\" onchange='changeValue(\"productH\", \"H\")' onmouseup=\"updateTotal()\"> <label id=\"prodHSub\"></label><br>";
    }
    ob_end_flush();
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
    <body onload="checkMonitorWidth(); checkFooter(); updateTotal()" style="background-color: #004AAD;">
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
                <form name="cart-form" class="cart-form" id="cart-form" method="post" onkeydown="checkForm()">
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                            
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

                            if(isset($_POST["checkOut"])){
                                if(isset($_SESSION["product1qty"])){
                                    unset($_SESSION["product1qty"]);
                                }
                                if(isset($_SESSION["product2qty"])){
                                    unset($_SESSION["product2qty"]);
                                }
                                if(isset($_SESSION["product2qty"])){
                                    unset($_SESSION["product2qty"]);
                                }
                                if(isset($_SESSION["product3qty"])){
                                    unset($_SESSION["product3qty"]);
                                }
                                if(isset($_SESSION["product4qty"])){
                                    unset($_SESSION["product4qty"]);
                                }
                                if(isset($_SESSION["product5qty"])){
                                    unset($_SESSION["product5qty"]);
                                }
                                if(isset($_SESSION["product6qty"])){
                                    unset($_SESSION["product6qty"]);
                                }
                                if(isset($_SESSION["product7qty"])){
                                    unset($_SESSION["product7qty"]);
                                }

                                $conn = mysqli_connect("localhost","root","","mamaflors");
                                if($conn->connect_error){
                                    die("ERROR". $conn->connect_error);
                                }
                                else{
                                    $identifier = $_SESSION["userID"];
                                    $sql = "SELECT rewardpoints FROM user WHERE userID='$identifier'";
                                    $result = $conn->query($sql);
                                    if( $result->num_rows > 0){
                                        $points = $result->fetch_assoc()["rewardpoints"];
                                        $points += 10;
                                        $sql = "UPDATE user SET rewardpoints=$points WHERE userID='$identifier'";
                                        $conn->query($sql);

                                        $sql = "SELECT rewardpoints FROM user WHERE userID='$identifier'";
                                        $result = $conn->query($sql);
                                        $_SESSION["rewardpoints"] = $result->fetch_assoc()["rewardpoints"];
                                    }
                                }
                                $conn->close();
                                // echo '<script>window.location.href=\"index.php\";</script>';
                            }



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
                        }

                        if($total <= 0){
                            echo "CART IS EMPTY<br>";
                            echo "<a href='menu.php'>Go To Menu</a>";
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
                        if($total != 0){
                            echo "<p id=\"total\" value=$total>TOTAL: ₱" . $total . ".00</p>" . "<input type=\"submit\" value=\"CheckOut\" name=\"checkOut\">";
                        }
                    ?>
                    <!-- <?php 
                        echo "Reward Points: ".$_SESSION["rewardpoints"];
                    ?> -->
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
        var totalP = document.getElementById("total");
        var total = 0;
        var subTotal = 0;
        if(productAqty != null){
            productAqty = parseInt(productAqty.value);
            subTotal = productAqty * 270;
            total += (productAqty * 270);
            document.getElementById("prodASub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productBqty != null){
            productBqty = parseInt(productBqty.value);
            subTotal = productBqty * 250;
            total += (productBqty * 250);
            document.getElementById("prodBSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productCqty != null){
            productCqty = parseInt(productCqty.value);
            subTotal = productCqty * 40;
            total += (productCqty * 40);
            document.getElementById("prodCSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productDqty != null){
            productDqty = parseInt(productDqty.value);
            subTotal = productDqty * 280;
            total += (productDqty * 280);
            document.getElementById("prodDSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productEqty != null){
            productEqty = parseInt(productEqty.value);
            subTotal = productEqty * 900;
            total += (productEqty * 900);
            document.getElementById("prodESub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productFqty != null){
            productFqty = parseInt(productFqty.value);
            subTotal = productFqty * 250;
            total += (productFqty * 250);
            document.getElementById("prodFSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productGqty != null){
            productGqty = parseInt(productGqty.value);
            subTotal = productGqty * 10;
            total += (productGqty * 10);
            document.getElementById("prodGSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(productHqty != null){
            productHqty = parseInt(productHqty.value);
            subTotal = productHqty * 40;
            total += (productHqty * 40);
            document.getElementById("prodHSub").innerHTML = " Subtotal: " + subTotal.toFixed(2);
        }
        if(totalP != null){
            totalP.innerHTML = "TOTAL: ₱" + total.toFixed(2);
        }
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

        function checkForm() {
            if (event.key == "Enter") {
                event.preventDefault();
            }
        }

    </script>
</html>