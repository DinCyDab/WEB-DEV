<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn->connect_error){
        die("ERROR". $conn->connect_error);
    }
    else{
        $sql = "CREATE DATABASE IF NOT EXISTS mamaflors";
        $conn->query($sql);

        $connectDB = mysqli_connect("localhost","root","","mamaflors");

        $sql = "CREATE TABLE IF NOT EXISTS product(
            productID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            productName VARCHAR(255) NOT NULL,
            productDesc VARCHAR(255) NOT NULL,
            productPrice INT(12) NOT NULL
        )";
        $connectDB->query($sql);

        $sql = "CREATE TABLE IF NOT EXISTS user(
            userID INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            username VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            cpassword VARCHAR(255) NOT NULL,
            contactnumber VARCHAR(255) NOT NULL,
            caddress VARCHAR(255) NOT NULL,
            rewardpoints INT(12) NOT NULL
        )";
        $connectDB->query($sql);

        $sql = "SELECT * FROM product";
        $result = $connectDB->query($sql);
        if($result->num_rows > 0){
            
        }
        else{
            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Roasted Chicken',
                'Indulge in the mouthwatering delight of our Roasted Chicken, featuring succulent meat infused with aromatic herbs and spices, all encased in a crispy golden-brown skin.',
                '270');";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Chicken Sisig',
                'Savor the irresistible fusion of savory spices and tender chicken pieces in our Chicken Sisig, expertly crafted to deliver a burst of flavor in every bite, making it the ultimate choice for a delightful meal experience.',
                '250'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Fried Chicken',
                'Experience the crispy indulgence of our Fried Chicken, boasting a golden-brown crust that encases tender, juicy meat, seasoned to perfection with a tantalizing blend of herbs and spices, promising a delightful culinary delight for any mealtime.',
                '40'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Pork Liempo',
                'Embark on a culinary journey with our Grilled Liempo, where the pork belly is meticulously marinated in a secret blend of herbs and spices, then grilled to perfection, delivering a tantalizing harmony of flavors and textures.',
                '280'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Pork Belly',
                'Indulge in pure satisfaction with our Pork Belly, featuring premium cuts of succulent pork belly, expertly seasoned and slow-cooked to perfection, ensuring every bite is a savory delight that embodies comfort and taste.',
                '900'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Pork Sisig',
                'Experience the fiery zest of our Pork Sisig, a masterpiece bursting with bold flavors and tender pork, meticulously seasoned and sizzled to perfection, offering a tantalizing symphony of taste and texture that will leave you craving for more.',
                '250'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Chicken Spring Roll',
                'Delight in the crispy perfection of our Spring Rolls, where a delicate blend of fresh vegetables, savory meats, and aromatic spices is enveloped in a light, golden-brown wrapper, creating a delectable fusion of flavors and textures.',
                '10'
            );";
            $connectDB->query($sql);

            $sql = "INSERT INTO product(productName, productDesc, productPrice)
            VALUES(
                'Atchara',
                'Elevate your palate with our tangy and refreshing Atchara, a Filipino delicacy meticulously crafted from crisp green papaya, carrots, and bell peppers, delicately pickled in a sweet and tangy blend of vinegar and spices.',
                '40');";
            $connectDB->query($sql);
        }
    }
    $connectDB->close();
    $conn->close();
?>