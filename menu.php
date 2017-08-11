<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Allora's Menu" content="Menu, Pizza, Pasta, Calzone, Stromboli, Salad, Subs, Hero, Appetizers, Wings, Burgers, Gourmet Dishes, Italian Dessert, Wine, Beer, Homemade Soup" />
<?include "inc/schema.php"?>
<link rel="stylesheet" href="style.css">
<title>Allora's Menu</title>

</head>
<body>
<?include "inc/header.php" ?>

<div class="about menu">
	<div class="collapse-menu">
		<div class="collapse-menu-header">
			<h3>Pizza</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/pizza.php";?>
		</div>
		<div class="collapse-menu-header">
			<h3>Calzone</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/calzone.php"?>
		</div>
		<div class="collapse-menu-header">
			<h3>Salad</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/salad.php"?>
		</div>
		<div class="collapse-menu-header">
			<h3>Pasta</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/pasta.php"?>
		</div>
	
		<div class="collapse-menu-header">
			<h3>Favorite Dishes</h3>
		</div> 
		<div class="collapse-menu-item">
			<?include "inc/favorite.php"?>
		</div>
		<div class="collapse-menu-header">
			<h3>Cold & Hot Heroes, Burgers</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/hero.php"?>
		</div>
	
		<div class="collapse-menu-header">
			<h3>Appetizers</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/appetizer.php"?>
		</div>
	
		<div class="collapse-menu-header">
			<h3>Homemade Soups</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/soup.php"?>
		</div>
	
		<div class="collapse-menu-header">
			<h3>Dessert</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/dessert.php"?>
		</div>
	
		<div class="collapse-menu-header" >
			<h3>Beverages</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/beverage.php"?>
		</div>
	</div>
</div>


<script src="func.js"></script>
<?
$id = trim(strip_tags($_GET["id"]));
		switch($id){
			case "pizza" : echo "<script>dropDown(0)</script>"; break;
			case "calzone" : echo "<script>dropDown(1)</script>"; break;
			case "salad": echo "<script>dropDown(2)</script>"; break;
			case "pasta": echo "<script>dropDown(3)</script>"; break;
			case "gourmet": echo "<script>dropDown(4)</script>"; break;
			case "hero": echo "<script>dropDown(5)</script>"; break;
			case "apetizers": echo "<script>dropDown(6)</script>"; break;
			case "soup": echo "<script>dropDown(7)</script>"; break;
			case "dessert": echo "<script>dropDown(8)</script>"; break;
			case "beverage": echo "<script>dropDown(9)</script>"; break;
		}
?>
<script src="func.js"></script>
<script>setActive(1)</script>
<?include "inc/footer.php"?>
</body>
</html>
