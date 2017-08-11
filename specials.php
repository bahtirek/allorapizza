<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Allora's Specials" content="Lunch specials, Dinner Specials, Chef's Specials, Early Bird Specials, Deal of the Day" />
<?include "inc/schema.php"?>
<link rel="stylesheet" href="style.css">
<title>Allora's Specials</title>
</head>
<body>
<?include "inc/header.php" ?>


<div class="about menu">
	<div class="collapse-menu">
		<div class="collapse-menu-header">
			<h3>Lunch Specials</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/lunch.php";?>
		</div>
		<div class="collapse-menu-header">
			<h3>Chef's Inspiration</h3>
		</div>
		<div class="collapse-menu-item">
		<?
			$day=date("j");//$day = 25;
			$month=date("n");//$month = 6;
			$half=false;
			$even=true;
			
			if ($month%2) $even=false;
			if ($day<=15) $half=true;
			if ($even==true and $half==true){
				include "inc/dinner_special1.inc.php";
			}elseif ($even==true and $half==false){
				include "inc/dinner_special2.inc.php";
			}elseif ($even==false and $half==true){
				include "inc/dinner_special3.inc.php";
			}else{
				include"inc/dinner_special4.inc.php";
			}
		?>
		</div>
		<div class="collapse-menu-header">
			<h3>Early Bird</h3>
		</div>
		<div class="collapse-menu-item">
			<?include "inc/earlybird.php"?>
		</div>
		<div class="collapse-menu-header">
			<h3>Deal of the Day</h3>
		</div>	
		<div class="collapse-menu-item">
			<?
				$weekday=date("w");
				switch ($weekday){
					case 0: echo '<img src="images/largewingsoda.jpg" class="dealofday">'; break;
					case 1: echo '<img src="images/mondaytuesday.jpg" class="dealofday">'; break;
					case 2: echo '<img src="images/mondaytuesday.jpg" class="dealofday">'; break;
					case 3: echo '<img src="images/twopizza.jpg" class="dealofday">'; break;
					case 4: echo '<img src="images/largewingsoda.jpg" class="dealofday">'; break;
					case 5: echo '<img src="images/twopizza.jpg" class="dealofday">'; break;
					case 6: echo '<img src="images/twopizza.jpg" class="dealofday">'; break;
				}
			?>
		</div>
	</div>
</div>


<script src="func.js"></script>
<script>setActive(3)</script>
<?include "inc/footer.php"?>
</body>
</html>
