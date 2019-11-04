<!DOCTYPE html>
<html>
    <head>
        <title>Confused?</title>
        <link href="https://fonts.googleapis.com/css?family=Caveat|Changa|PoiretOne|Righteous|Tajawal&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/navbar_style.css">
        <link rel="stylesheet" href="../styles/compare_style.css">
    </head>

    <body>

        <div id="navbar" style="padding: 10px 0px 10px 0px">
           
        </div>

        <?php

            include 'initialize.php';

            $phone1 = "Redmi Note 7S";
            $phone2 = "Samsung Galaxy S9";

            if(isset($_GET["phone1"]) && isset($_GET["phone2"])){
                $phone1 = $_GET["phone1"];
                $phone2 = $_GET["phone2"];
            }

        ?>


        <div id="compare-section">
            
            <table>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" id="phone1" name="phone1" placeholder="Enter phone name" />
                    </td>
                    <td>
                        <input type="text" id="phone2" name="phone2" placeholder="Enter phone name" />
                    </td>
                    </form>
                </tr>

                <?php

                    if(isset($_GET["phone1"]) && isset($_GET["phone2"])){
                        echo '<tr><td class="img-row"></td><td class="img-row"><img src="'.$data[$phone1]["images"][0].'"/></td><td class="img-row"><img src="'.$data[$phone2]["images"][0].'"/></td></tr>';
                        echo '<tr><td></td><td><h4>'.$phone1.'</h4></td><td><h4>'.$phone2.'</h4></td></tr>';
                        foreach($data[$phone1] as $feature=>$subfeature){
                            if($feature == "images")
                                break;
                            echo "<tr><th><span>".$feature."</span></th></tr>";
                            foreach($subfeature as $key=>$value){
                                echo "<tr class=\"sub-feat\"><td>".$key."</td>";
                                echo "<td>".$value."</td><td>".$data[$phone2][$feature][$key]."</td></tr>";
                            }
                            if($feature != "NETWORK")
                                echo "<tr style=\"background-color: #fff\"><td></td></tr>";
                        }
                    }
                ?>

            </table>

            <a id="fsubmit" onclick="submit_func()" href="">Compare</a>

        </div>


        <div id="contact-section">

        </div>

        <script src="../scripts/load_navbar.js"></script>

        <script>
            
            function submit_func(){
                var ph1 = document.getElementById("phone1").value;
                var ph2 = document.getElementById("phone2").value;
                ph1 = ph1.split().join("+")
                ph2 = ph2.split().join("+")
                document.getElementById("fsubmit").setAttribute("href", "compare.php?phone1="+ph1+"&phone2="+ph2);
            }

        </script>

    </body>

</html>