<!DOCTYPE html>
<html>
    <head>
        <title>Confused?</title>
        <link href="https://fonts.googleapis.com/css?family=Caveat|Changa|PoiretOne|Righteous|Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/navbar_style.css">
        <style>

            .dev-card{
                width: 15%;
                border: 1px solid black;
                text-align: center;
                padding: 10px;
                margin-bottom: 30px;
            }

            .dev-card img{
                width: 90%;
            }

        </style>
    </head>

    <body>

        <?php
            include 'db_conn.php';
        ?>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <div style="width:80%; margin: 50px 0px 50px 10%; padding: 2%;">

            <a href="reviews.php">
                <div class="dev-card">
                    <img src="http://www.ifairer.com/article_image/1570696992-ifairer.jpg">
                    <h5>OnePlus 7T-McLaren Edition </h5>
                </div>
            </a>

            <span> More Reviews Coming Soon.....</span>

        </div>
        
        <div id="contact-section">

        </div>

        <script src="../scripts/load_navbar.js"></script>

        <script>

        </script>

    </body>

</html>