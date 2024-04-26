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
        $productA = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product1"] . ":";
        $productAqty = $_SESSION["product1qty"];
        $total += ($productAqty * 270);
        $productAqty = "<input type=\"number\" value=\"$productAqty\" min=\"0\"><br>";
        // "<input id=\"productA\" name=\"qtyproductA\" type=\"number\" value=\"$productAqty\" min=\"0\" onclick=\"changeValue('productA', 'A')\"><br>";
    }

    if(isset($_SESSION["product2qty"])){
        $productB = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product2"] . ":";
        $productBqty = $_SESSION["product2qty"];
        $total += ($productBqty * 250);
        $productBqty = "<input type=\"number\" value=\"$productBqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product3qty"])){
        $productC = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product3"] . ":";
        $productCqty = $_SESSION["product3qty"];
        $total += ($productCqty * 40);
        $productCqty = "<input type=\"number\" value=\"$productCqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product4qty"])){
        $productD = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product4"] . ":";
        $productDqty = $_SESSION["product4qty"];
        $total += ($productDqty * 280);
        $productDqty = "<input type=\"number\" value=\"$productDqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product5qty"])){
        $productE = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product5"] . ":";
        $productEqty = $_SESSION["product5qty"];
        $total += ($productEqty * 900);
        $productEqty = "<input type=\"number\" value=\"$productEqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product6qty"])){
        $productF = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product6"] . ":";
        $productFqty = $_SESSION["product6qty"];
        $total += ($productFqty * 250);
        $productFqty = "<input type=\"number\" value=\"$productFqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product7qty"])){
        $productG = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product7"] . ":";
        $productGqty = $_SESSION["product7qty"];
        $total += ($productGqty * 10);
        $productGqty = "<input type=\"number\" value=\"$productGqty\" min=\"0\"><br>";
    }

    if(isset($_SESSION["product8qty"])){
        $productH = "<input type=\"submit\" value=\"Delete\">" . $_SESSION["product8"] . ":";
        $productHqty = $_SESSION["product8qty"];
        $total += ($productHqty * 40);
        $productHqty = "<input type=\"number\" value=\"$productHqty\" min=\"0\"><br>";
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
                padding: 50px;
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
            <div class="contact-us-form">
                <div class="form-container">
                    <form class="cart-form" method="post">
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
                                    $productA = $_POST["qtyproductA"];
                                    $_SESSION["product1qty"] = $productA;
                                }
                                if(isset($_POST["qtyproductB"])){
                                    $productB = $_POST["qtyproductB"];
                                    $_SESSION["product2qty"] = $productB;
                                }
                                // if(isset($_POST["deleteA"])){
                                //     unset($_SESSION["productA"]);
                                // }

                                header("Location: cart.php");
                                exit;
                            }

                            if($total != 0){
                                echo "TOTAL: ₱" . $total . ".00" . "<input type=\"submit\" value=\"Check Out\">";
                            }
                        ?>
                    </form>
                </div>
            </div>
            <div class="space-bottom"></div>
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
    <script src="script.js"></script>
    <script>
        function changeValue(productCode, letterCode){
            var product = document.getElementById(productCode).value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("qtyproduct"+letterCode+"=" + product);
        }
    </script>
</html>