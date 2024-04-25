<?php 
    session_start();
    $_SESSION["started"] = true;
    $username = $_SESSION["username"];
    $Afirstname = $_SESSION["firstname"];
    $lastname = $_SESSION["lastname"];
    $email = $_SESSION["email"];
    $contactnumber = $_SESSION["contactnumber"];
    $address = $_SESSION["address"];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="account-settings.css">
        <link rel="icon" href="imagesource/logo.png">
    </head>
    <body onload="checkMonitorWidth(); checkFooter()">
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content" style="padding-bottom:150px">
            <div class="introduction-container">
                <div class="welcome-container">
                    <h2 style="color: #004AAD;"> <div style="color: red; margin-bottom: 50px;">ACCOUNT SETTINGS</div></h2>
                    <div class="accountsettings-container">
                        <form action="updatepassword.php" name="myform" method="post" id="contactForm" style="display:flex;" onsubmit="return passwordVerify()">
                            <div class="right-container" style="pointer-events: none;">
                                <label for="first-name">Username:</label><br>
                                <input type="first-name" id="first-name" name="username" value="<?php echo "$username"?>"><br>
                                <br>
                                <label for="first-name">First Name:</label><br>
                                <input type="first-name" id="first-name" name="first-name" value="<?php echo "$Afirstname"?>"><br>
                                <br>
                                <label for="last-name">Last Name:</label><br>
                                <input type="last-name" id="last-name" name="last-name" value="<?php echo "$lastname"?>"><br>
                                <br>
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" value="<?php echo "$email"?>"><br>
                                <br>
                                <label for="contact">Contact Number:</label><br>
                                <input type="contact" id="contact" name="contact" value="<?php echo "$contactnumber"?>"><br>
                                <br>
                            </div>
                            <div class="left-container">
                                <label for="address">Address:</label><br>
                                <input type="address" id="address" name="address"style="pointer-events: none;"  value="<?php echo "$address"?>"><br>
                                <br>
                                <label for="new-password">New Password:</label><br>
                                <input type="password" id="new-password" name="newpassword" required><br>
                                <br>
                                <label for="confirm-password">Confirm Password:</label><br>
                                <input type="password" id="confirm-password" name="confirmpass" required><br>
                                <br>
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
        function passwordVerify(){
            var newPass = document.forms["myform"]["newpassword"].value;
            var conPass = document.forms["myform"]["confirmpass"].value;
            if(newPass != conPass){
                alert("PASSWORD DID NOT MATCH");
                return false;
            }
            alert("PASSWORD UPDATED SUCCESSFULLY");
        }
    </script>
</html>