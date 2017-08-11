<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Allora's Coupons" content="Coupons, Deals, Specials" />
<?include "inc/schema.php"?>
<link rel="stylesheet" href="style.css">
<title>Allora's Coupons</title>

</head>
<body>
<?include "inc/header.php" ?>
<?
$expDate = date('M').'-'.date('t').'-'.date('Y');
?>
<div class="about menu">
	<div class="coupon">
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>$5 OFF<BR> with purchase of $25 or more</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
			
		</div>
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>$10 OFF<BR> with purchase of $50 or more</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
		</div>
	</div>
	<div class="coupon">
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>Two large pizza<br>one topping each<br>$22.99</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
		</div>
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>One large pizza with 2 toppings,<br> 12 wings, 6 garlic rolls, 2lt soda $24.99</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
		</div>
	</div>
	<div class="coupon">
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>Large two topping pizza $10.99<br>monday & tuesday <br>pick up only</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
		</div>
		<div>
			<div>
				<img src="images/allora_logo_sm.png">
				<h3>Large cheese pizza and<br> large salad <br>$18.99</h3>
				<p>Excludes Specials. May not be combined with any other coupons or specials</p>
				<span>Exp: <?echo $expDate?></span>
			</div>
		</div>
		
	</div>
	<div style="clear:both"></div>
	<div class="print-coupon">
		<span class="button" onclick="toPrint()">PRINT</span>
	</div>
	
	
	

</div>


<script src="func.js"></script>

<?include "inc/footer.php"?>
</body>
</html>
