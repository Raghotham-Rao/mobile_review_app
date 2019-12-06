<!DOCTYPE html>
<html>
    <head>
        <title>Confused?</title>
        <link href="https://fonts.googleapis.com/css?family=Caveat|Changa|PoiretOne|Righteous|Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/navbar_style.css">
        <link rel="stylesheet" href="../styles/new_rel.css">
    </head>

    <body>

        <?php
            include 'db_conn.php';
            include 'initialize.php'
        ?>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <div id="restof">

            <?php
                $query = "select name,release_dt,img,ratings from devices where brand = '".$_GET["brand"]."'order by ratings desc limit 10";
                $result = $conn->query($query);
                $brands = array();
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<a href='details_page.php?phone_name=".$row["name"]."'><div class='dev-details'>";
                        echo "<div class='dev-img'><img src='".$row["img"]."'></div>";
                        echo "<div class='dev-det'> <h3>".$row["name"]." <span>".$row['release_dt']."</span></h3>";
                        $c = 0;
                        foreach($data[$row["name"]]["Highlights"] as $hlts){
                            echo $hlts."<br>";
                            $c += 1;
                            if($c == 5) break;
                        }
                        echo "</div></div></a>";
                    }
                }
            ?>

        </div>

        <div id="contact-section">

        </div>

        <script src="../scripts/load_navbar.js"></script>

        <script>

        </script>

    </body>

</html>