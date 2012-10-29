<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Cart</title>
	<meta charset='utf-8'> 
	
	<link rel="stylesheet" href="css/style.css" media="screen" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
	
	<!-- Your styles -->
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>

	<script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body id="checkout">
	
	<?php include 'php-includes/header-include.php'; ?>
	
	<div class="content">
		<div class="container">
		<h2>checkout</h2>
		
		<form method="post" action="#" id="payment">
			<fieldset>
			<legend>Billing Address</legend>
				<ul>
					<li>Name: 
					<input type="text" name="name" /></li>
					
					<li>Street Address: 
					<input type="text" name="b_staddress" /></li>
					
					<li>City: 
					<input type="text" name="b_city" /></li>
					
					<li>State: 
					<input type="text" name="b_state" id="b_state" /></li>
					
					<li>Zip Code:
					<input type="text" name="b_zip" /></li>
				</ul>
			</fieldset>
			
			<fieldset>
				<legend>Shipping Address (if different from billing)</legend>
				<ul>
					<li>Name: 
					<input type="text" name="sname" /></li>
					
					<li>Street Address: 
					<input type="text" name="s_staddress" /></li>
					
					<li>City: 
					<input type="text" name="s_city" /></li>
					
					<li>State: 
					<input type="text" name="s_state" id="s_state" /></li>
					
					<li>Zip Code:
					<input type="text" name="s_zip" /></li>
				</ul>
			</fieldset>
				
			<fieldset>
				<legend>Payment</legend>
					<ul>
						<li>Card Number:
						<input type="text" name="cardnum" /></li>
						
						<li>Expiration Date:
						<input type="text" name="carddate" /></li>
					</ul>	
			</fieldset>
				
			<fieldset class="submit">
				<input  type="submit" id="sumbit" name="submit" value="Submit" /> 
			</fieldset>
		</form>

		</div><!--/.container-->
	</div><!--/.content-->

	<?php include 'php-includes/footer-include.php'; ?>
	
</body>
</html>