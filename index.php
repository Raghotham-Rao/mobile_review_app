<!DOCTYPE html>
<html>
    <head>
        <title>Confused?</title>
        <link href="https://fonts.googleapis.com/css?family=Caveat|Changa|PoiretOne|Righteous|Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/navbar_style.css">
    </head>

    <body>

        <?php
            include 'pages/initialize.php';
        ?>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <div id="brand-list">

            <h4>Brands</h4>

            <ul>
                <?php

                    foreach($brands as $brand){
                        echo '<li><a href="pages/devices.php?brand='.$brand.'">'.$brand.'</a></li>';
                    }

                ?>
            </ul>

        </div>
        
        <div id="contact-section">

        </div>

        <script src="scripts/load_navbar.js"></script>
        <script>
            document.getElementById("search-bar").setAttribute("action", "pages/details_page.php");
        </script>
    </body>
</html>
