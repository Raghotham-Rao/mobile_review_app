<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="navbar_style.css"/>
		<link rel="stylesheet" href="details_style.css">
		<link href="https://fonts.googleapis.com/css?family=Caveat|Changa|Poiret+One|Righteous|Tajawal&display=swap" rel="stylesheet">
		<meta charset="UTF-8">
    </head>

    <body onload="func()">
    
    	<?php
            $jsonFile = file_get_contents("phone_details.json");
            $data = json_decode($jsonFile, true);
            
            $phones = array();
            foreach($data as $key=>$v)
            	$phones[] = $key;
            if(isset($_GET["phone_name"]))
            	$phone = $_GET["phone_name"];
            else
            	$phone = "Redmi Note 7S";
        ?>
		
		<div id="navbar">

		</div>
		
		<div id="rest_of">
		
			<div id="images">
				<img src="" alt="image"/ id="the_image">
			</div>
			
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
				<span style="font-size: 30px;"> Price: </span></br>
				<span><?php echo $data[$phone]["MISC"]["Price"]; ?></span>
			</div>

			<div id="release">
				<span> Available From <?php echo $data[$phone]["LAUNCH"]["Announced"] ?> </span>
			</div>
		
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
		
        <script src="load_navbar.js"></script>
    </body>
</html>
