<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
        <style>
            .login-container{
                position: relative;
                width: 50%;
                height: auto;
                text-align: center;
                padding-top: 50px;
                padding-bottom: 50px;
                background-color: rgba(255, 255, 255, .3);
                left: 50%;
                transform: translate(-50%);
                border-radius: 50px;
            }

            .create-account-link {
                text-decoration: none;
                text-decoration: underline;
            }
            
            .btn-signin {
                    
            }

        .login{
            text-align: center;
            font-family: ChunkFive;
            color: red;
            font-size: 40px;
            letter-spacing: 5px;
            width: auto;
            text-shadow: 3px 3px 2px white,
                        -3px -3px 2px white,
                        -3px 3px 2px white,
                        3px -3px 2px white;
        }

        .input-group-sign{
            position: relative;
            /* border: 1px red solid; */
            width: 35%;
            height: auto;
            left: 50%;
            transform: translate(-50%, 0%);
        }

        .input-group-sign input{
            position: relative;
            left: 50%;
            transform: translate(-50%, 0%);
            background-color: #004AAD;
            color: white;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
            
        </style>
    </head>
    <body onload="checkMonitorWidth(); checkFooter()">
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content" style="padding-top:150px; padding-bottom:250px">
            <div class="login-container">
                <h2 class="login">LOGIN</h2>
                <form action="verify-account.php" method="post">
                    <div class="input-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <br>
                    <div class="input-group-sign">
                        <input class="btn-signin" type="submit" value="Sign in" class="btn">
                    </div>
                </form>
                <div class="create-account-container">
                    <p>No account?</p>
                    <a href="create-account.php" class="create-account-link">Create Account</a>
                </div>
            </div>
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
    <script src="script.js"></script>
    <script src="click-to-zoom.js"></script>
    <script src="go-to-branch.js"></script>
</html>
