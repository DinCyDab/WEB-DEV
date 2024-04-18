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
        <div class="accountsettings">
            <div class="accountsettings-container">
                <img src="imagesource/profile-icon.png" onclick="showHidden()">
            </div>
            <form class="hidden-profile" id="hidden-profile">
                <div class="hidden-username">
                    <div class="hidden-username-left">
                        <h4>Username:</h4>
                    </div>
                    <div class="hidden-username-right">
                        <input type="text" name="username" required>
                    </div>
                </div>
                <div>
                    <div class="hidden-password">
                        <div class="hidden-password-left">
                            <h4>Password:</h4>
                        </div>
                        <div class="hidden-password-right">
                            <input type="password" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="hidden-submit">
                    <div class="submit-left">
                        <a href="create-account.php">Create Account</a>
                    </div>
                    <div class="submit-right">
                        <input class="hidden-submit-button" type="submit" value="Sign in">
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>
<script src="account-settings.js"></script>