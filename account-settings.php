<?php 
    session_start();
    $_SESSION["started"] = true;

    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $Afirstname = $_SESSION["firstname"];
        $lastname = $_SESSION["lastname"];
        $email = $_SESSION["email"];
        $contactnumber = $_SESSION["contactnumber"];
        $address = $_SESSION["address"];
    }
    else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="account-settings.css">
        <link rel="icon" href="imagesource/logo.png">
        <style>
            .account-form-design{
                width: 100%;
            }

        </style>
    </head>
    <body onload="checkMonitorWidth(); checkFooter(); accountSettings()">
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content" style="padding-bottom:150px">
            <div class="introduction-container">
                <div class="account-settings-container">
                    <h2 style="color: #004AAD;"> <div style="color: red; margin-bottom: 50px;">ACCOUNT SETTINGS</div></h2>
                    <div class="accountsettings-container">
                        <form id="account-form-design" class="account-form-design" action="updatepassword.php" name="myform" method="post" id="contactForm" style="display:flex;" onsubmit="return passwordVerify()">
                            <div id="right-container" class="right-container" style="pointer-events: none;">

                                <div class="right-container-content">
                                    <p for="first-name">Username:</p>
                                    <input type="first-name" id="first-name" name="username" value="<?php echo "$username"?>">
                                </div>

                                <div class="right-container-content">
                                    <p for="first-name">First Name:</p>
                                    <input type="first-name" id="first-name" name="first-name" value="<?php echo "$Afirstname"?>">
                                </div>

                                <div class="right-container-content">
                                   <p for="last-name">Last Name:</p>
                                   <input type="last-name" id="last-name" name="last-name" value="<?php echo "$lastname"?>">
                                </div>

                                <div class="right-container-content">
                                   <p for="last-name">Last Name:</p>
                                   <input type="last-name" id="last-name" name="last-name" value="<?php echo "$lastname"?>">
                                </div>

                                <div class="right-container-content">
                                    <p for="email">Email:</p>
                                    <input type="email" id="email" name="email" value="<?php echo "$email"?>">
                                </div>

                                <div class="right-container-content">
                                    <p for="contact">Contact Number:</p>
                                    <input type="contact" id="contact" name="contact" value="<?php echo "$contactnumber"?>">
                                </div>


                            </div>
                            <div class="left-container" id="left-container">

                                <div class="right-container-content">
                                    <p for="address">Address:</p>
                                    <input type="address" id="address" name="address"style="pointer-events: none;"  value="<?php echo "$address"?>">
                                </div>

                                <div class="right-container-content">
                                    <p for="new-password">New Password:</p>
                                    <input type="password" id="new-password" name="newpassword" required>
                                </div>
                                
                                <div class="right-container-content">
                                    <p for="confirm-password">Confirm Password:</p>
                                    <input type="password" id="confirm-password" name="confirmpass" required>
                                </div>

                                
                                <div class="submit-button">
                                    <input type="submit" value="Update">
                                </div>
                                <br>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
        <?php
            include "footer.php";
        ?>
    </body>
    <script src="script.js"></script>
    <script src="click-to-zoom.js"></script>
    <script src="go-to-branch.js"></script>
    <script>
        window.addEventListener("resize", accountSettings);

        var width = window.innerWidth;

        function passwordVerify(){
            var newPass = document.forms["myform"]["newpassword"].value;
            var conPass = document.forms["myform"]["confirmpass"].value;
            if(newPass != conPass){
                alert("PASSWORD DID NOT MATCH");
                return false;
            }
            alert("PASSWORD UPDATED SUCCESSFULLY");
        }

        function accountSettings(){
            if(width < 1150){
                document.getElementById("account-form-design").style.display = "block";
                document.getElementById("right-container").style.width = "100%";
                document.getElementById("right-container").style.left = "50%"; 
                document.getElementById("right-container").style.transform = "translate(-50%, 0%)"; 

                document.getElementById("left-container").style.width = "100%";
            }
            else{
                document.getElementById("account-form-design").style.display = "flex";
                document.getElementById("right-container").style.width = "50%";
                document.getElementById("right-container").style.left = "0%"; 
                document.getElementById("right-container").style.transform = "translate(0%, 0%)"; 

                document.getElementById("left-container").style.width = "50%";
            }
        }
    </script>
</html>