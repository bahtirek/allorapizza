<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<script src="func.js"></script>
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





<?include "inc/footer.php"?>
<script src="func.js"></script>
<script>dropDown(anchor)</script>
</body>
</html>
