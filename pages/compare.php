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

            echo $phone1." ".$phone2;

        ?>


        <div id="compare-section">
            
            <table>
                <tr>
                    <td>Feature</td>
                        <td>
                            <input type="text" id="phone1" name="phone1" placeholder="Enter phone name" />
                        </td>
                        <td>
                            <input type="text" id="phone2" name="phone2" placeholder="Enter phone name" />
                        </td>
                    </form>
                </tr>
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
                document.getElementById("fsubmit").setAttribute("href", "compare.php?")
            }

        </script>

    </body>

</html>