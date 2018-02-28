<?php
    $title = "Map";
    require_once "includes/header.php";
?>
            <div class = "main-content-image" id = "main-map-image">
                <div><h1>The Map</h1></div>
            </div>
            <div class = "clearfix main-content-wrapper col-sm-12">
                <div class = "main-content">
                    <h2 class = "info-header" id = "valley-map-header">Yosemite Valley Map</h2>
                    <div class = "col-sm-12 side-image-wrapper">
                        <figure>
                            <img class = "side-image" id = "valley-map" src = "images/map.png" alt = "Placeholder">
                            <figcaption>via <a href = "https://www.nps.gov/hfc/carto/PDF/YOSEmap2.pdf">nps.gov</a></figcaption>
                        </figure>
                    </div>
                    <div class = "col-sm-6 map-links">
                        <h3>Too Small?</h3>
                        <h4><a href="https://www.nps.gov/hfc/carto/PDF/YOSEmap2.pdf">Here</a> is a bigger view</h4>
                    </div>
                    <div class = "col-sm-6 map-links" id = "trails-link">
                        <h3>Check out the <a href="trails.php">Trails Guide!</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.shtml";?>
