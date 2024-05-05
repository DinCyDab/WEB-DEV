<?php 
    include "createdatabase.php";
?>

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
        <title>Welcome to Mama Flor's Lechon House</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
    </head>
    <body onload="checkMonitorWidth(); changeImageSize(); changeLocatedContent(); checkFooter(); monitorCheck()">
        <?php
            include "click-to-zoom.php";
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content">
            <div class="introduction-container">
                <div class="welcome-container">
                    <div class="banana-leaf-1"></div>
                    <div class="banana-leaf-2"></div>
                    <h2 style="color: #004AAD;">Welcome to <div style="color: red; margin-bottom: 0px;">MAMA FLOR'S LECHON HOUSE!</div></h2>
                    <p style="font-family: 'Courier New', Courier, monospace;
                    font-weight: bold; margin-top: 0;">"Basta Luto ni Mama, Lami gyud na!"</p>
                </div>
            </div>
            <div class="home-menu-container">
                <div class="home-menu-display">
                    <div class="home-menu-header">
                        <div class="left-side-menu-header">
                            <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Menu</h2>
                        </div>
                        <div class="right-side-menu-header">
                            <a href="menu.php" style="display: inline-block; right: 20px; position: absolute;">
                                <p>View all</p>
                            </a>
                        </div>
                    </div>
                    <div class="home-menu-image-container">
                        <div class="chicken-image-holder-1" id="chicken-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('<?php echo $row[0][1]?>', '₱<?php echo $row[0][3]?>.00', 'imagesource/roasted-chicken.jpg', '<?php echo $row[0][2]?>', '<?php echo $row[0][0]?>')">
                            <div class="chicken-image-holder" id="chicken-image-1" name="test"></div>
                            <div class="chicken-description">
                                <p style="color: red;"><?php echo $row[0][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[0][3]?>.00</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('<?php echo $row[3][1] ?>', '₱<?php echo $row[3][3] ?>.00', 'imagesource/pork-liempo.jpg', '<?php echo $row[3][2] ?>', '<?php echo $row[3][0]?>')">
                            <div class="pork-image-holder" id="pork-image-1"></div>
                            <div class="pork-description">
                                <p style="color: red;"><?php echo $row[3][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[3][3]?>.00</p>
                            </div>
                        </div>
                        <div class="spring-roll-image-holder-1" id="spring-roll-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('<?php echo $row[6][1] ?>', '₱<?php echo $row[6][3] ?>.00/pc', 'imagesource/spring-roll.jpg', '<?php echo $row[6][2] ?>', '<?php echo $row[6][0]?>')">
                            <div class="spring-roll-image-holder" id="spring-roll-image-1"></div>
                            <div class="spring-roll-description">
                                <p style="color: red;"><?php echo $row[6][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[6][3]?>.00/pc</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-2" style="font-family: ChunkFive;" onclick="zoomClicked('<?php echo $row[5][1] ?>', '₱<?php echo $row[5][3] ?>.00', 'imagesource/pork-sisig.jpg', '<?php echo $row[5][2] ?>', '<?php echo $row[5][0]?>')">
                            <div class="pork-image-holder" id="pork-image-3"></div>
                            <div class="pork-description">
                                <p style="color: red;"><?php echo $row[5][1] ?></p>
                                <p style="color: #004AAD;">₱<?php echo $row[5][3]?>.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="located-at-container">
                <div class="located-content" id="located-content-locator">
                    <div class="located-content-header">
                        <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Our Branches</h2>
                    </div>
                    <div class="located-branch-1" id="located-branch-1">
                        <div class="left-branch-1" id="located-branch-image-1">
                            <img src="imagesource/tisa.jpg">
                        </div>
                        <div class="right-branch-1" id="right-branch-1">
                            <h2 style="font-family: ChunkFive; letter-spacing: 5px; color: #004AAD;">Tisa</h2>
                            <p id="branch-1-description" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Katipunan St., Tisa Cebu City</p>
                        </div>
                    </div>
                    <div class="located-branch-2" id="located-branch-2">
                        <div class="left-branch-2" id="left-branch-2">
                            <h2 style="font-family: ChunkFive; letter-spacing: 5px; color: #004AAD;">Basak</h2>
                            <p style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Basak, Lapu-Lapu City</p>
                        </div>
                        <div class="right-branch-2" id="located-branch-image-2">
                            <img src="imagesource/basak.jpg">
                        </div>
                        <div class="left-branch-2-hidden" id="left-branch-2-hidden">
                            <h2 style="font-family: ChunkFive; letter-spacing: 5px; color: #004AAD;">Basak</h2>
                            <p id="branch-2-description" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Basak, Lapu-Lapu City</p>
                        </div>
                    </div>
                    <div class="located-branch-3" id="located-branch-3">
                        <div class="left-branch-3" id="located-branch-image-3">
                            <img src="imagesource/tipolo.jpg">
                        </div>
                        <div class="right-branch-3" id="right-branch-3">
                            <h2 style="font-family: ChunkFive; letter-spacing: 5px; color: #004AAD;">Tipolo</h2>
                            <p id="branch-3-description" style="font-family: 'Courier New', Courier, monospace; font-weight: bold;">Lopez Jaena St., Tipolo Mandaue City</p>
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
    <script src="home-script.js"></script>
    <script src="index-script.js"></script>
    <script src="click-to-zoom.js"></script>
    <script src="small-click-to-zoom.js"></script>
    <script src="go-to-branch.js"></script>
</html>