<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cocoa Bean: Gourmet Chocolate Treats | checkout | Sherry Bauerschmidt Hofmeister</title>
	<link rel="stylesheet" href="css/style.css" media="screen" />

</head>
<body id="checkout">
	<div class="header">
		<h1><a href="home.php">Cocoa Bean: Gourmet Chocolate Treats</a></h1>	

		<form  method="post" action="search.php"  id="searchform"> 
			<p><input  type="text" name="searchbox" id="searchbox" /> 
			<input  type="submit" id="search" name="submit" value="Search" /> </p>
		</form>

		<ul class="cart">
			<li id="scart"><a href="cart.php">Checkout</a></li>
			<li><a href="cart.php">3 items</a></li>
		</ul>
			
		<ul class="nav">
			<li><a href="cheesecake.php">cheesecake</a></li>
				<li><a href="truffles.php">truffles</a></li>
				<li><a href="fruit.php">fruit</a></li>
				<li><a href="cupcakes.php">cupcakes</a></li>
							<li ><a href="contact.php">Contact Us</a></li>
		</ul>
		
		
	</div>
	
	<div class="content">
		<div class="container">
		<h2>checkout</h2>
		
			<form method="post" action="#"  id="payment">
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



		</div>
		</div>

	<div id="footer">
		<p>&copy; Cocoa Bean<sup>TM</sup> Inc.  All Rights Reserved.</p>
		<p>This site is not official and is an assignment for a UCF Digital Media course.</p>
		<p>Designed by Sherry Bauerschmidt Hofmeister.</p>
	</div>
	
	</body>
</html>