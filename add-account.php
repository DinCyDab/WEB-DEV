<?php
    function load_user(){
        $content = file_get_contents("users.txt");
        return unserialize($content);
    }

    $userList = load_user();
    $canAdd = true;
    
    if($userList == true){
        for($x = 0; $x < sizeof($userList); $x++){
            if($userList[$x]["username"] == $username){
                $canAdd = false;
            }
        }
    }

    if($canAdd == true){
        $userList[] = array(
            "username" => $_POST["username"],
            "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
            "email" => $_POST["email"]
        );
    
        file_put_contents("users.txt", serialize($userList));
        echo "<script> alert('USER ADDED') </script>";
    }
?>