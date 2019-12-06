<!DOCTYPE html>
<html>
    <head>
        <title>Confused?</title>
        <link href="https://fonts.googleapis.com/css?family=Caveat|Changa|PoiretOne|Righteous|Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/brand_style.css">
        <link rel="stylesheet" href="../styles/navbar_style.css">
    </head>

    <body>

        <?php
            include 'db_conn.php';
        ?>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <div id="brand-list">

            <h3>All Brands</h3>
            <?php
                $query = "select distinct(brand) from devices";
                $result = $conn->query($query);
                $brands = array();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<a href="viewall.php?brand='.$row["brand"].'">'.$row["brand"].'</a>';
                        $brands[] = $row["brand"];
                    }
                }
            ?>

        </div>

        <?php
            foreach($brands as $brand){
                echo '<div class="category">';
                echo '<h3>'.$brand.' Phones</h3><ul>';
                $query = 'select name,img from devices where brand="'.$brand.'" order by ratings desc limit 5';
                $result = $conn->query($query);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo '<li><a href="details_page.php?phone_name='.$row["name"].'"><div class="dev-card"><img src="'.$row["img"].'"/><h5>'.$row["name"].'</h5></div></a></li>';
                    }
                }
                echo '<a class="view-all-btn" href="viewall.php?brand='.$brand.'">View All >>></a>';
                echo '</ul></div>';
            }
        ?>
        
        <div id="contact-section">

        </div>

        <script src="../scripts/load_navbar.js"></script>

        <script>

        </script>

    </body>

</html>