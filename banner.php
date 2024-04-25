<?php
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    if(isset($_SESSION["firstname"])){
        $firstname = $_SESSION["firstname"] . " <sub>▼</sub>";
    }

    if(isset($firstname)){
        $user = "onclick='showHiddenProfile();'";
        $noHide = "";
    }
    else{
        $user = "onclick=\"window.location.href='login.php'\"";
        $noHide = "login.php";
    }
?>

<style>
    .hidden-profile-container{
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, 0%);
        width: 200px;
        height: auto;
        background-color: #004AAD;
        display: none;
    }

    .hidden-profile{
        width: 100%;
        height: auto;
        /* background-color: green; */
        text-align: center;
        margin-bottom: 20px;
        padding-bottom: 5px;
        padding-top: 10px;
    }

    .hidden-profile a{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        margin: 0;
        color: white;
        text-decoration: underline;
    }
</style>

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
            <div class="loginpage-container" <?php echo $user ?>>
                <a <?php echo $noHide ?>>
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
            <div class="hidden-profile-container" id="hidden-profile-container">
                <div class="hidden-profile" id="account-details">
                    <a href="account-settings.php">Account Settings</a>
                </div>
                <div class="hidden-profile" id="redeem-rewards">
                    <a href="underconstruction.php">Redeem Rewards</a>
                </div>
                <div class="hidden-profile" id="cart-details">
                    <a href="underconstruction.php">Check Cart</a>
                </div>
                <div class="hidden-profile" id="log-out">
                    <a href="log-out.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var isHidden = true;
    function showHiddenProfile(){
        var hiddenProfileContainer = document.getElementById("hidden-profile-container");
        if(isHidden){
            hiddenProfileContainer.style.display = "block";
        }
        else{
            hiddenProfileContainer.style.display = "none";
        }
        isHidden = !isHidden;
    }
</script>