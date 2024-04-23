<?php
    if(!isset($_SESSION["started"])){
        session_start();
    }
    if(isset($_SESSION["firstname"])){
        $firstname = $_SESSION["firstname"];
    }
?>

<div class="side-menu-icon" id="side-menu-icon" onclick="sideMenu()">
    <img src="imagesource/menu.png">
</div>
<div class="banner" id="banner">
    <div class="left-side" id="left-side">
        <a href="index.php">
            <img id="left-side-img" src="imagesource/logo.png" alt="Mama Flor's Logo">
        </a>
    </div>
    <div class="right-side" id="right-side">
        <div class="homepage">
            <div class="homepage-container" onclick="window.location.href='index.php'">
                <a href="index.php">
                    <h4>HOME</h4>
                </a>
            </div>
        </div>
        <div class="menupage">
            <div class="menupage-container" onclick="window.location.href='menu.php'">
                <a href="menu.php">
                    <h4>MENU</h4>
                </a>
            </div>
        </div>
        <div class="aboutuspage">
            <div class="aboutuspage-container" onclick="window.location.href='about-us.php'">
                <a href="about-us.php">
                    <h4>ABOUT US</h4>
                </a>
            </div>
        </div>
        <div class="contactuspage">
            <div class="contactuspage-container" onclick="window.location.href='contact-us.php'">
                <a href="contact-us.php">
                    <h4>CONTACT US</h4>
                </a>
            </div>
        </div>
        <div class="loginpage">
            <div class="loginpage-container"
                onclick='window.location.href="
                <?php
                    if(isset($firstname)){
                        echo "account-settings.php";
                    }
                    else{
                        echo "login.php";
                    }
                ?>"'>
                <a href="<?php
                            if(isset($firstname)){
                                echo "account-settings.php";
                            }
                            else{
                                echo "login.php";
                            }
                        ?>">
                    <h4>
                        <?php if(isset($firstname)){
                                echo $firstname;
                            }
                            else{
                                echo "LOGIN";
                            }
                        ?>
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>