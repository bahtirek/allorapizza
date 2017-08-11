
<div class="about" id="home">
	<?include "inc/notice.php"?>
	<div class="welcome">
		<h3>Welcome to Allora</h3>
			<p>"Allora's atmospere is best described as cozy. 
			Our dining room is comfortable and private. 
			You will feel right at home if you plan to dine 
			with that special someone, or bring the whole family.  
			Our staff is very friendly and personable - most of our 
			customers we call by name. Try Allora for delivery, 
			dine-in, or take-out and become part of our family."</p>
		
	</div>
	<?
		if(date('n') == '11' and date('j') > '15' and date('j') < '27') include "inc/thanksgiving.php";
		if(date('n') == '12' and date('j') > '15' and date('j') < '31') include "inc/christmas.php";
		if(date('n') == '1' and date('j') == '1') include "inc/christmas.php";
	?>
</div>
<div class="about grey">
	<div class="food">
		<div class="art">
			<img src="images/pizza.jpg" alt="pizza" width="" height="">
			<!-- <div style="clear: left"></div> -->
			<div>
				<h3>Pizza</h3>
				<p>New York style, thin crust, hand tossed. Made from scratch</p>
			</div>
		</div>
		<div class="art">
			<img src="images/pasta.jpg" alt="pasta" width="" height="">
			<div>
				<h3>Pasta</h3>
				<p>Very good pasta</p>
			</div>
		</div>
		<div class="art">
			<img src="images/salad.jpg" alt="salad" width="" height="">
			<!-- <div style="clear: left"></div> -->
			<div>
				<h3>Salad</h3>
				<p>"Lorem ipsum dolor sit amet.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
		
	  <div style="clear:both"></div>
	</div>
</div>

<div class="about">
	<div class="food">
		<div class="art-sm">
			<img src="images/dining.png" alt="dinein" width="" height="">
			<h3>Dine in</h3>
		</div>
		<div class="art-sm">
			<img src="images/takeout.png" alt="takeout" width="" height="">
			<h3>Take out</h3>
		</div>
		<div class="art-sm">
			<img src="images/car.png" alt="delivery" width="20px" height="">
			<h3>Delivery</h3>
		</div>
		<div style="clear:both"></div>
		<br>
		<p class="phone">561-296-9295</p>
		<p class="address">420 US Hwy One North Palm Beach Fl 33408</p>
	</div>
</div>


<div class="about grey">
	<div class="food">
		<div class="art">
			<img src="images/diner1.jpg" alt="diner" width="" height="">
		</div>
		<div class="art">
			<img src="images/patio.jpg" alt="patio" width="" height="">
		</div>
		<div class="art">
			<img src="images/diner2.jpg" alt="diner" width="" height="">
		</div>
		<div style="clear:both"></div>
		<div>
			<h3>Dining experience</h3>
			<p>"Lorem ipsum dolor sit amet.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
		<br>
	</div>
</div>
