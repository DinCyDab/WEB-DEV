<?php
    if(!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    }

    $conn = mysqli_connect("localhost","root","","mamaflors");
    if($conn->connect_error){
        die("ERROR". $conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);
        $row = array();
        if($result->num_rows > 0){
            $row = $result->fetch_all();
        }

        
    }
    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Savor the Selection: Mama Flor's Lechon House Menu</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
    </head>
    <body onload="checkMonitorWidth(); checkContent(); porkCheckContent(); springRollCheckContent(); othersCheckContent(); locateContents(); categoryDesign(); checkWidth(); checkFooter(); monitorCheck()">
        <?php
            include "click-to-zoom.php";
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="category-container" id="category-container">
            <div class="banana-leaf-3"></div>
            <div class="banana-leaf-4"></div>
            <div class="category-header">
                <h2 style="font-family: ChunkFive; color: red; letter-spacing: 5px;">MENU CATEGORY</h2>
            </div>
            <div class="category-holder">
                <div class="chicken-content-container" id="chicken-content-container" onclick="goToChicken(); chickenLockScroll()">
                    <p>Chicken</p>
                </div>
                <div class="pork-content-container"  id="pork-content-container" onclick="goToPork(); porkLockScroll()">
                    <p>Pork</p>
                </div>
                <div class="spring-roll-content-container" id="spring-roll-content-container" onclick="goToSpringRoll(); springRollLockScroll();">
                    <p>Spring Roll</p>
                </div>
                <div class="others-content-container" id="others-content-container" onclick="goToOthers(); othersLockScroll()">
                    <p>Others</p>
                </div>
            </div>
        </div>
        <div class="pop-up-container" id="chicken-pop-up-container">
            <h2 id="pop-up-header">N/A</h2>
        </div>
        <div class="content">
            <div class="back-to-home-container-menu">
                <div class="back-to-home-menu" id="back-to-home-menu">
                    <a href="index.php">
                        <p>Back To Home</p>
                    </a>
                </div>
            </div>
            <div class="chicken-container">
                <div class="chicken-holder" id="chicken-locator">
                    <div class="chicken-header">
                        <h2 style="font-family: ChunkFive; letter-spacing: 5px;">Chicken</h2>
                    </div>
                    <div class="chicken-holder-container" id="chicken-holder">
                        <div class="chicken-image-holder-1" id="chicken-image-holder-1" onclick="zoomClicked('<?php echo $row[0][1] ?>', '₱<?php echo $row[0][3] ?>.00','imagesource/roasted-chicken.jpg', '<?php echo $row[0][2] ?>', '<?php echo $row[0][0] ?>')">
                            <div class="chicken-image-holder" id="chicken-image-1"></div>
                            <div class="chicken-description">
                                <p style="color: red;"><?php echo $row[0][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[0][3] ?>.00</p>
                            </div>
                        </div>
                        <div class="chicken-image-holder-1" id="chicken-image-holder-2" onclick="zoomClicked('<?php echo $row[1][1] ?>', '₱<?php echo $row[1][3] ?>.00', 'imagesource/chicken-sisig.jpg', '<?php echo $row[1][2] ?>', '<?php echo $row[1][0] ?>')">
                            <div class="chicken-image-holder" id="chicken-image-2"></div>
                            <div class="chicken-description">
                            <p style="color: red;"><?php echo $row[1][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[1][3] ?>.00</p>
                            </div>
                        </div>
                        <div class="chicken-image-holder-1" id="chicken-image-holder-3" onclick="zoomClicked('Fried Chicken', '₱40.00/pc', 'imagesource/fried-chicken-1.jpg',
                        'Experience the crispy indulgence of our Fried Chicken, boasting a golden-brown crust that encases tender, juicy meat, seasoned to perfection with a tantalizing blend of herbs and spices, promising a delightful culinary delight for any mealtime.', '<?php echo $row[2][0] ?>')">
                            <div class="chicken-image-holder" id="chicken-image-3"></div>
                            <div class="chicken-description">
                                <p style="color: red;">Fried Chicken</p>
                                <p style="color: #004AAD;">₱40.00/pc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pork-container">
                <div class="pork-holder" id="pork-locator">
                    <div class="pork-header">
                        <h2 style="font-family: ChunkFive; letter-spacing: 5px;">Pork</h2>
                    </div>
                    <div class="pork-holder-container" id="pork-holder-container">
                        <div class="pork-image-holder-1" id="pork-image-holder-1" onclick="zoomClicked('Liempo', '₱280.00', 'imagesource/pork-liempo.jpg',
                        'Embark on a culinary journey with our Grilled Liempo, where the pork belly is meticulously marinated in a secret blend of herbs and spices, then grilled to perfection, delivering a tantalizing harmony of flavors and textures that redefine the essence of indulgence.', '<?php echo $row[3][0] ?>')">
                            <div class="pork-image-holder" id="pork-image-1"></div>
                            <div class="pork-description">
                                <p style="color: red;">Liempo</p>
                                <p style="color: #004AAD;">₱280.00</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-2" onclick="zoomClicked('Pork Belly', '₱900.00/kg', 'imagesource/pork-belly.jpg',
                        'Indulge in pure satisfaction with our Pork Belly, featuring premium cuts of succulent pork belly, expertly seasoned and slow-cooked to perfection, ensuring every bite is a savory delight that embodies comfort and taste in its simplest, yet most exquisite form.', '<?php echo $row[4][0] ?>')">
                            <div class="pork-image-holder" id="pork-image-2"></div>
                            <div class="pork-description">
                                <p style="color: red;">Pork Belly</p>
                                <p style="color: #004AAD;">₱900.00/kg</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-3" onclick="zoomClicked('Pork Sisig', '₱250.00', 'imagesource/pork-sisig.jpg',
                        'Experience the fiery zest of our Pork Sisig, a masterpiece bursting with bold flavors and tender pork, meticulously seasoned and sizzled to perfection, offering a tantalizing symphony of taste and texture that will leave you craving for more.', '<?php echo $row[5][0] ?>')">
                            <div class="pork-image-holder" id="pork-image-3"></div>
                            <div class="pork-description">
                                <p style="color: red;">Pork Sisig</p>
                                <p style="color: #004AAD;">₱250.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spring-roll-container">
                <div class="spring-roll-holder" id="spring-roll-locator">
                    <div class="spring-roll-header">
                        <h2 style="font-family: ChunkFive; letter-spacing: 5px;">Spring Roll</h2>
                    </div>
                    <div class="spring-roll-holder-container" id="spring-roll-holder-container">
                        <div class="spring-roll-image-holder-1" id="spring-roll-image-holder-1" onclick="zoomClicked('Chicken Spring Roll', '₱10.00/pc', 'imagesource/spring-roll.jpg',
                        'Delight in the crispy perfection of our Spring Rolls, where a delicate blend of fresh vegetables, savory meats, and aromatic spices is enveloped in a light, golden-brown wrapper, creating a delectable fusion of flavors and textures that promises an unforgettable experience with every bite.', '<?php echo $row[6][0] ?>')">
                            <div class="spring-roll-image-holder" id="spring-roll-image-1"></div>
                            <div class="spring-roll-description">
                                <p style="color: red;">Chicken Spring Roll</p>
                                <p style="color: #004AAD;">₱10.00/pc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="others-container">
                <div class="others-holder" id="others-locator">
                    <div class="others-header">
                        <h2 style="font-family: ChunkFive; letter-spacing: 5px;">Others</h2>
                    </div>
                    <div class="others-holder-container" id="others-holder-container">
                        <div class="others-image-holder-1" id="others-image-holder-1" onclick="zoomClicked('Atchara', '₱40.00/250g', 'imagesource/atchara.png',
                        'Elevate your palate with our tangy and refreshing Atchara, a Filipino delicacy meticulously crafted from crisp green papaya, carrots, and bell peppers, delicately pickled in a sweet and tangy blend of vinegar and spices, delivering a burst of vibrant flavors that perfectly complement any meal.', '<?php echo $row[7][0] ?>')">
                            <div class="others-image-holder" id="others-image-1"></div>
                            <div class="others-description">
                                <p style="color: red;">Atchara</p>
                                <p style="color: #004AAD;">₱40.00/250g</p>
                            </div>
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
    <script src="menu-script.js"></script>
    <script src="menu-content-script.js"></script>
    <script src="click-to-zoom.js"></script>
    <script src="small-click-to-zoom.js"></script>
</html>