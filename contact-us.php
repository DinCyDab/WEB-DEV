<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get in Touch: Contact Mama Flor's Lechon House</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
    </head>
    <body onload="checkMonitorWidth(); checkFooter(); checkWidth()" style="background-color: #004AAD;">
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
                    CONTACT US</h2>
                </div>
            </div>
            <div class="contact-us-form">
                <div class="form-container">
                    <form class="input-field" id="input-field" name="inputField" onsubmit="return validateForm()">
                        <div class="form-name-holder" id="form-name-holder">
                            <p>NAME</p>
                            <input type="text" name="fullName">
                        </div>
                        <div class="form-email-holder" id="form-email-holder">
                            <p>E-MAIL</p>
                            <input type="text" name="email">
                        </div>
                        <div class="form-message-holder" id="form-message-holder">
                            <p>MESSAGE</p>
                            <textarea type="text" name="message"></textarea>
                        </div>
                        <div class="form-submit-holder">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-us-content-container">
                <div class="contact-us-content">
                    <div class="head-office-container">
                        <h4 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px">Corporate Head Office</h4>
                        <ul>
                            <li><p style="font-family:'Courier New', Courier, monospace; font-weight: bold;">+63 962 207 9430</p></li>
                            <li><p style="font-family:'Courier New', Courier, monospace; font-weight: bold;">M.L. Quezon Street, Maguikay, Mandaue City, Cebu, 6014</p></li>
                        </ul>
                    </div>
                    <div class="customer-care-container">
                        <h4 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px">Customer Care</h4>
                        <ul>
                            <li><p id="customer-care" style="font-family:'Courier New', Courier, monospace; font-weight: bold;">mamaflorslechonhouse@gmail.com</p></li>
                        </ul>
                    </div>
                    <div class="social-media-container" id="social-media-container">
                        <h4 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px">Social Media</h4>
                        <div class="social-media-content">
                            <a href="https://www.facebook.com/profile.php?id=100063961540591">
                                <img src="imagesource/facebook.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-bottom"></div>
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
    <script src="script.js"></script>
    <script src="contact-us.js"></script>
</html>