<?php 
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    if(isset($_SESSION["firstname"])){
        $firstname = $_SESSION["firstname"] . " <sub>▼</sub>";
    }

    if(isset($firstname)){
        $user = "onclick='showHiddenProfileSide();'";
        $noHide = "";
    }
    else{
        $user = "onclick=\"window.location.href='login.php'\"";
        $noHide = "login.php";
    }
?>

<style>
    .hidden-profile-container-side{
        width: 200px;
        height: auto;
        /* border: 1px black solid; */
        position: fixed;
        left: 300px;
        top: 100px;
        background-color: #004AAD;
        display: none;
    }

    .hidden-profile-side{
        width: 100%;
        height: auto;
        /* background-color: green; */
        text-align: center;
        margin-bottom: 20px;
        padding-bottom: 5px;
        padding-top: 10px;
    }

    .hidden-profile-side a{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        position: relative;
        top: 50%;
        transform: translate(0%, -50%);
        margin: 0;
        color: white;
        text-decoration: underline;
    }
</style>

<div class="side-menu-container" id="side-menu-container">
    <div class="click-space" onclick="sideMenu()"></div>
    <div class="home-side-menu-container" <?php echo $user?>>
        <div class="home-side-menu">
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
    </div>
    <div style="margin-top: 0px" class="home-side-menu-container">
        <div class="home-side-menu" onclick="window.location.href='index.php'">
            <a href="index.php">
                <h4>HOME</h4>
            </a>
        </div>
    </div>
    
    <div class="menu-side-menu-container" onclick="window.location.href='menu.php'">
        <div class="menu-side-menu">
            <a href="menu.php">
                <h4>MENU</h4>
            </a>
        </div>
    </div>
    <div class="aboutus-side-menu-container" onclick="window.location.href='about-us.php'">
        <div class="aboutus-side-menu">
            <a href="about-us.php">
                <h4>ABOUT US</h4>
            </a>
        </div>
    </div>
    <div class="contactus-side-menu-container" onclick="window.location.href='contact-us.php'">
        <div class="contactus-side-menu">
            <a href="contact-us.php">
                <h4>CONTACT US</h4>
            </a>
        </div>
    </div>
    <div class="hidden-profile-container-side" id="hidden-profile-container-side">
        <div class="hidden-profile-side" id="account-details">
            <a href="account-settings.php">Account Settings</a>
        </div>
        <div class="hidden-profile-side" id="redeem-rewards">
            <a href="underconstruction.php">Redeem Rewards</a>
        </div>
        <div class="hidden-profile-side" id="cart-details">
            <a href="cart.php">Check Cart</a>
        </div>
        <div class="hidden-profile-side" id="log-out">
            <a href="log-out.php">Log out</a>
        </div>
    </div>
</div>

<script>
    var isHidden = true;
    function showHiddenProfileSide(){
        var hiddenProfileContainerSide = document.getElementById("hidden-profile-container-side");
        if(isHidden){
            hiddenProfileContainerSide.style.display = "block";
        }
        else{
            hiddenProfileContainerSide.style.display = "none";
        }
        isHidden = !isHidden;
    }
</script>