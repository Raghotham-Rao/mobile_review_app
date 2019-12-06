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
            include 'pages/db_conn.php';
        ?>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <div id="brand-list">

            <h4>Brands</h4>

            <ul>
                <?php

                    $query = "select distinct(brand) from devices";
                    $result = $conn->query($query);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo '<li><a href="pages/viewall.php?brand='.$row["brand"].'">'.$row["brand"].'</a></li>';
                        }
                    }
                    
                ?>
            </ul>

        </div>

        <div id="coming_soon" style="color: orange; font-weight: lighter;background-image: url('https://i.ytimg.com/vi/xJudmRt6PJU/maxresdefault.jpg'); background-size: cover;">
            <h1>Coming soon...</h1>
        </div>

        <div id="rest_of">
            
            <div class="category">
                
                <h4>Latest Releases</h4>
                
                <ul>
                    
                    <?php

                        $query = "select name,img from devices order by release_dt desc limit 5";
                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $n = explode(" ", $row["name"]);
                                $n_str = implode("+", $n);
                                echo '<li><a href="pages/details_page.php?phone_name='.$n_str.'"><div class="dev-card"><img src="'.$row["img"].'"/><h5>'.$row["name"].'</h5></div></a></li>';
                            }
                        }

                    ?>

                </ul>

            </div>

            <div class="category">
                
                <h4>Top Rated</h4>
                
                <ul>
                    
                    <?php

                        $query = "select name,img from devices order by ratings desc limit 5";
                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo '<li><a href="pages/details_page.php?phone_name='.$row["name"].'"><div class="dev-card"><img src="'.$row["img"].'"/><h5>'.$row["name"].'</h5></div></a></li>';
                            }
                        }

                    ?>

                </ul>

            </div>

        </div>

        <div id="contact-section">

        </div>

        <script src="scripts/load_navbar.js"></script>
        <script>
            document.getElementById("search-bar").setAttribute("action", "pages/details_page.php");
            document.getElementById("comp_menu").setAttribute("href", "pages/compare.php");
            document.getElementById("brand_menu").setAttribute("href", "pages/brands.php");
            document.getElementById("new_rel_menu").setAttribute("href", "pages/new_releases.php");
            document.getElementById("the_logo_nav").setAttribute("href", "index.php");
            document.getElementById("rev_menu").setAttribute("href", "pages/reviews-list.php");
            document.getElementById("the_logo_contact").setAttribute("href", "index.php");
        </script>
    </body>
</html>
