<?php
    $title = "Homepage";
    require_once "includes/header.php";
?>
            <div class = "main-content-image" id="index-main-content-image">
                <div class="landing-image" style="z-index: 2; display: block;">
                    <div class="slide-image image-zoom" style="background-image: url(images/filler_image.jpg); background-position: center 50%;"></div>
                    <div class = "landing-image-box"><p>Tunnel View of Yosemite Valley (Bridalveil Fall on Right)</p></div>
                </div>
                <div class="landing-image" style="z-index: 1;">
                    <div class="slide-image" style="background-image: url(images/glacier-point-landing.jpg); background-position: center 25%;"></div>
                    <div class = "landing-image-box"><p>Fun fact: Glacier Point has an elevation of 7,214 feet</p></div>
                </div>
                <div class="landing-image">
                    <div class="slide-image" style="background-image: url(images/mariposa-grove-landing.jpg); background-position: center 90%;"></div>
                    <div class = "landing-image-box"><p>Mariposa Grove: This tree is called the Wawona Tree. It unfortunately fell in February, 1969.</p></div>
                </div>
                <div class="landing-image">
                    <div class="slide-image" style="background-image: url(images/river-bank.jpg); background-position: center 50%;"></div>
                    <div class = "landing-image-box"><p>El Capitan on left (Credit: Spondylolithesis)</p></div>
                </div>
            </div>
            <div class = "clearfix main-content-wrapper">
                <div class = "main-content">
                    <h2 class = "info-header">Welcome!</h2>
                    <div class = "col-sm-6 col-sm-push-6 side-image-wrapper">
                        <figure>
                            <img class = "side-image" src = "images/yosemite_landing.png" alt = "Placeholder">
                            <figcaption>via <a href = "https://www.yosemite.com/">Yosemite.com</a></figcaption>
                        </figure>
                    </div>
                    <div class = "col-sm-6 col-sm-pull-6 main-info">
                        <p>Hello everyone! Welcome to my favorite place on the planet… (drum roll please) ……YOSEMITE! I’m going to go ahead and assume that you are visiting this site because you want to learn more about my personal experience at Yosemite! Well…maybe, but fear not! There is still a bunch of information on here to be discovered and I hope to convince you to take a trip to this beautiful and peaceful place at least once in your lifetime.</p>
                        <a href="about.php" class="landing-link">About Page</a>
                        <a href="comments.php" class="landing-link">Leave a Comment!</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/scripts.js"></script>
        <?php include "includes/footer.shtml";?>
