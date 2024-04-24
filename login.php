<?php
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    if(isset($_SESSION["loggedin"])){
        header("Location: index.php");
    }
?>

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
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $username = $_POST["username"];
                $password = $_POST["password"];

                $conn = mysqli_connect("localhost","root","","mamaflors");
                $canLogIn = false;
                $noAccount = false;

                if ($conn->connect_error) {
                    die("ERROR". $conn->connect_error);
                }
                else{
                    $sql = "SELECT * FROM user
                            WHERE username = '$username';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        if(password_verify($password, $row["cpassword"])) {
                            $canLogIn = true;
                        }
                    }
                    else{
                        $noAccount = true;
                        include "error.php";
                    }
                    
                    if($canLogIn == true){
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["firstname"] = $row["firstname"];
                        $_SESSION["lastname"] = $row["lastname"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["contactnumber"] = $row["contactnumber"];
                        $_SESSION["address"] = $row["caddress"];
                        $_SESSION["loggedin"] = true;
                        header("Location: index.php");
                        exit;
                    }
                    elseif($noAccount == false){
                        include "wrongpass.php";
                    }
                }
                $conn->close();
            }
        ?>
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content" style="padding-top:150px; padding-bottom:250px">
            <div class="login-container">
                <h2 class="login">LOGIN</h2>
                <form method="post" onsubmit="return verifyAccount()">
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