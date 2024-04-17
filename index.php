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
                        <div class="chicken-image-holder-1" id="chicken-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('Roasted Chicken', '₱270.00','imagesource/roasted-chicken.jpg',
                        'Indulge in the mouthwatering delight of our Roasted Chicken, featuring succulent meat infused with aromatic herbs and spices, all encased in a crispy golden-brown skin.')">
                            <div class="chicken-image-holder" id="chicken-image-1"></div>
                            <div class="chicken-description">
                                <p style="color: red;">Roasted Chicken</p>
                                <p style="color: #004AAD;">₱270.00</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('Liempo', '₱280.00', 'imagesource/pork-liempo.jpg',
                        'Embark on a culinary journey with our Grilled Liempo, where the pork belly is meticulously marinated in a secret blend of herbs and spices, then grilled to perfection, delivering a tantalizing harmony of flavors and textures that redefine the essence of indulgence.')">
                            <div class="pork-image-holder" id="pork-image-1"></div>
                            <div class="pork-description">
                                <p style="color: red;">Liempo</p>
                                <p style="color: #004AAD;">₱280.00</p>
                            </div>
                        </div>
                        <div class="spring-roll-image-holder-1" id="spring-roll-image-holder-1" style="font-family: ChunkFive;" onclick="zoomClicked('Chicken Spring Roll', '₱10.00/pc', 'imagesource/spring-roll.jpg',
                        'Delight in the crispy perfection of our Spring Rolls, where a delicate blend of fresh vegetables, savory meats, and aromatic spices is enveloped in a light, golden-brown wrapper, creating a delectable fusion of flavors and textures that promises an unforgettable experience with every bite.')">
                            <div class="spring-roll-image-holder" id="spring-roll-image-1"></div>
                            <div class="spring-roll-description">
                                <p style="color: red;">Chicken Spring Roll</p>
                                <p style="color: #004AAD;">₱10.00/pc</p>
                            </div>
                        </div>
                        <div class="pork-image-holder-1" id="pork-image-holder-2" style="font-family: ChunkFive;" onclick="zoomClicked('Pork Sisig', '₱250.00', 'imagesource/pork-sisig.jpg',
                        'Experience the fiery zest of our Pork Sisig, a masterpiece bursting with bold flavors and tender pork, meticulously seasoned and sizzled to perfection, offering a tantalizing symphony of taste and texture that will leave you craving for more.')">
                            <div class="pork-image-holder" id="pork-image-3"></div>
                            <div class="pork-description">
                                <p style="color: red;">Pork Sisig</p>
                                <p style="color: #004AAD;">₱250.00</p>
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