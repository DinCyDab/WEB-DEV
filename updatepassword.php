<?php
    $username = $_POST["username"];
    $password = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
    
    $conn = mysqli_connect("localhost","root","","mamaflors");

    if ($conn->connect_error) {
        die("ERROR". $conn->connect_error);
    }
    else{
        $sql = "UPDATE user SET cpassword='$password' WHERE username='$username'";
        $conn->query($sql);
    }
    
    $conn->close();
    header("Location: account-settings.php");
    exit;
?>