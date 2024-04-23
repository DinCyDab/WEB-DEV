<?php
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $contactnumber = $_POST["contactnumber"];
    $address = $_POST["address"];

    $createdAccount = false;

    $conn = mysqli_connect("localhost","root","","mamaflors");
    if ($conn->connect_error) {
        die("ERROR". $conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "USERNAME IS ALREADY TAKEN <br>";
            echo "<a href='login.php'>LOGIN</a>";
        }
        else{
            $sql = "INSERT INTO user(username, firstname, lastname, email, cpassword, contactnumber, caddress)
            VALUES ('$username', '$firstname', '$lastname', '$email', '$password', '$contactnumber', '$address');";
            $conn->query($sql);
            $createdAccount = true;
        }
    }

    $conn->close();
    if($createdAccount == true){
        header("Location: login.php");
    }
?>