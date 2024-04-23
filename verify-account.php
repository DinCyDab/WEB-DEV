<?php
    session_start();

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
            echo "NO USERNAME FOUND <br>";
            echo "<a href='login.php'>BACK TO LOGIN</a>";
        }
        
        if($canLogIn == true){
            $_SESSION["username"] = $row["username"];
            $_SESSION["firstname"] = $row["firstname"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["contactnumber"] = $row["contactnumber"];
            $_SESSION["address"] = $row["caddress"];
            header("Location: index.php");
            exit;
        }
        elseif($noAccount == false){
            echo "WRONG PASSWORD <br>";
            echo "<a href='login.php'>BACK TO LOGIN</a>";
        }
    }

    $conn->close();
?>