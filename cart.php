<!DOCTYPE html>
<html>
<head>
	<title>Cocoa Bean: Gourmet Chocolate Treats</title>
	<meta charset='utf-8'> 
	
	<link rel="stylesheet" href="css/style.css" media="screen" />
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