<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="../styles/navbar_style.css"/>
		<link rel="stylesheet" href="../styles/details_style.css"/>
		<link href="https://fonts.googleapis.com/css?family=Caveat|Changa|Poiret+One|Righteous|Tajawal&display=swap" rel="stylesheet">
		<meta charset="UTF-8">
    </head>

    <body onload="func()">
    
		<?php
			
			include "initialize.php";

            if(isset($_GET["phone_name"]))
            	$phone = $_GET["phone_name"];
            else
				$phone = "Redmi Note 7S";
        ?>
		
		<div id="navbar">

		</div>
		
		<div id="rest_of">
		
			<div id="images">
				<img src="" alt="image" id="the_image"/>
			</div>
			
			<div id="overview">

				<div id="dev_name">
					<span><?php echo $phone; ?></span>
				</div>
				</br>
				<div id="rat-rev">
					<div id="rating">
						<span>Rating:</span>
						<span><?php echo $data[$phone]["Overall"]; ?></span>
					</div>
					<div id="review">
						<?php echo $data[$phone]["Ratings"]; ?>
					</div>
				</div>

				<div id="highlights">
					<h4>Highlights</h4>
					<ul>
						<?php
							foreach($data[$phone]["Highlights"] as $feature){
								echo "<li>".$feature."</li>";
							}
						?>
					</ul>
				</div>

				<div id="price">
					<span style="font-size: 30px;"> Price: <?php echo $data[$phone]["MISC"]["Price"]; ?></span>
				</div>

				<div id="release">
					<span> Available From <?php echo $data[$phone]["LAUNCH"]["Announced"] ?> </span>
				</div>

			</div>

			<div id="details">
				<table>
					<?php
						foreach($data[$phone] as $feature=>$subfeature){
							if($feature == "images")
								break;
							echo "<tr><th><span>".$feature."</span></th></tr>";
							foreach($subfeature as $key=>$value){
								echo "<tr class=\"sub-feat\"><td>".$key."</td>";
								echo "<td>".$value."</td></tr>";
							}
							if($feature != "NETWORK")
								echo "<tr style=\"background-color: #fff\"><td></td></tr>";
						}
					?>
				</table>
			</div>

		</div>

		<div id="contact-section">

		</div>
	
		<script>
			var images = <?php echo '["'.implode('", "', $data[$phone]["images"]).'"]'; ?>;
			var ind = 1, img_src = document.getElementById("the_image");
			
			function func(){
				img_src.setAttribute("src", images[0]);
			}
			
			// var sldshw = setInterval(change, 3000);
			
			function change(){
				img_src.setAttribute("src", images[ind]);
				ind++;
				ind %= images.length;
				console.log(img_src);
			}
		</script>
		
        <script src="../scripts/load_navbar.js"></script>
    </body>
</html>
