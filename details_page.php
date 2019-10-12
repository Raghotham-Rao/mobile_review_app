<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" href="navbar_style.css"/>
    	<link href="https://fonts.googleapis.com/css?family=Caveat|Changa|Poiret+One|Righteous|Tajawal&display=swap" rel="stylesheet">
    	<link type="text/css" rel="stylesheet" href="details_style.css">
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
				<?php echo $phone; ?>
			</div>
		
		</div>
	
		<script>
			var images = <?php echo '["'.implode('", "', $data[$phone]["images"]).'"]'; ?>;
			var ind = 1, img_src = document.getElementById("the_image");
			
			function func(){
				img_src.setAttribute("src", images[0]);
			}
			
			//var sldshw = setInterval(change, 3000);
			
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
