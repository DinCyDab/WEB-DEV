<?php
    session_start();
    
    function load_user(){
        $content = file_get_contents("users.txt");
        return unserialize($content);
    }

    function loadDashboard(){
        $_SESSION["username"] = $_POST["username"];
        header("Location: dashboard.php");
        exit;
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $userList = load_user();

    if($userList == false){
        echo "NO ACCOUNT IN THE DATABASE";
        echo "<a href='index.php'>BACK TO LOGIN</a>";
        session_destroy();
        exit;
    }

    $haveAccount = false;

    if($userList == true){
        for($x = 0; $x < sizeof($userList); $x++){
            if($userList[$x]["username"] == $username && password_verify($password, $userList[$x]["password"])){
                $haveAccount = true;
            }
            elseif($userList[$x]["username"] == $username && !password_verify($password, $userList[$x]["password"])){
                echo "<script> alert('WRONG PASSWORD') </script>";
                header( "Refresh:.1; url=index.php", true, 303);
                session_destroy();
                exit;
            }
        }
    }

    if($haveAccount == true){
        loadDashboard();
    }
    else{
        echo "<script> alert('NO ACCOUNT ASSOCIATED') </script>";
        header("Location: index.php");
        session_destroy();
        exit;
    }
?>