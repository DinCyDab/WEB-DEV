<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Discover Our Story: Mama Flor's Lechon House</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="imagesource/logo.png">
    </head>
    <body onload="checkMonitorWidth(); resizeContents(); checkFooter()">
        <?php
            include "sidemenu.php";
            include "banner.php";
        ?>
        <div class="content">
            <div class="back-to-home-container">
                <div class="back-to-home" id="back-to-home">
                    <a href="index.php">
                        <p>Back To Home</p>
                    </a>
                </div>
            </div>
            <div class="about-us-container">
                <div class="about-us-header">
                    <h2 style="font-family: ChunkFive; color: red; letter-spacing: 5px;">ABOUT US</h2>
                </div>
            </div>
            <div class="introduction-container">
                <div class="introduction-content-holder" id="introduction-content-holder">
                    <div class="left-side-introduction" id="left-side-introduction">
                        <img src="imagesource/intro.jpg">
                    </div>
                    <div class="right-side-introduction" id="right-side-introduction">
                        <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Introduction</h2>
                        <p style="font-family:'Courier New', Courier, monospace; font-weight: bold;">Welcome to Mama Flor's Lechon House, where every bite tells a story of tradition, passion, and the vibrant flavors of the Philippines.
                            Nestled in the heart of Tipolo, Tisa and Lapu-lapu,
                            Mama Flor's is more than just a lechon house, it's a culinary sanctuary dedicated to the art of lechon, a beloved dish deeply rooted in Filipino culture. Mama Flor's has been a beacon for food lovers seeking an authentic taste of home, serving up succulent,
                            golden-brown roasted chicken and pork that captivates the senses and ignites the soul.</p>
                    </div>
                </div>
            </div>
            <div class="mission-container">
                <div class="mission-content-holder" id="mission-content-holder">
                    <div class="left-side-mission" id="left-side-mission">
                        <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Mission</h2>
                        <p style="font-family:'Courier New', Courier, monospace; font-weight: bold; text-indent: 20px;">To deliver an unparalleled culinary experience rooted in the rich traditions of Filipino cuisine.
                            With our roasted chicken and pork, we strive to delight our customers with flavors that evoke memories of home-cooked meals and festive gatherings.</p>
                    </div>
                    <div class="right-side-mission" id="right-side-mission">
                        <img src="imagesource/mission.jpg">
                    </div>
                    <div class="left-side-mission-hidden" id="left-side-mission-hidden">
                        <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Mission</h2>
                        <p style="font-family:'Courier New', Courier, monospace; font-weight: bold;">To deliver an unparalleled culinary experience rooted in the rich traditions of Filipino cuisine.
                            With our roasted chicken and pork, we strive to delight our customers with flavors that evoke memories of home-cooked meals and festive gatherings.</p>
                    </div>
                </div>
            </div>
            <div class="vision-container">
                <div class="vision-content-holder" id="vision-content-holder">
                    <div class="left-side-vision" id="left-side-vision">
                        <img src="imagesource/vision.jpg">
                    </div>
                    <div class="right-side-vision" id="right-side-vision">
                        <h2 style="font-family: ChunkFive; color: #004AAD; letter-spacing: 5px;">Vision</h2>
                        <p style="font-family:'Courier New', Courier, monospace; font-weight: bold;">To be the foremost destination for authentic Filipino roasted chicken and pork,
                            renowned for our unwavering commitment to quality, innovation, and customer satisfaction.</p>
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
    <script src="about-us.js"></script>
</html>