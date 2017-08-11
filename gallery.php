<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Allora's Gallery" content="Italian Dish, Pizza Photos, Italian Dish, Pizza Pictures" />
<?include "inc/schema.php"?>
<link rel="stylesheet" href="style.css">
<title>Allora's Gallery</title>
</head>
<body>
<?include "inc/header.php" ?>


<div class="about menu">
	<div class="gallery">
		<div>
			<img src="gallery/image1.jpg" id = "image">
			<div>
				<span class="button" onclick="gallery(0)">PREV</span>
				<span class="button" onclick="gallery(1)">NEXT</span>
				<!--<button onclick="gallery(1)">next</button>-->
			</div>
		</div>
	</div>
</div>




<script src="func.js"></script>
<script>setActive(5)</script>
<?include "inc/footer.php"?>
</body>
</html>
