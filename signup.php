<?php
	include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Sign Up</title>
	<meta charset='utf-8'>     
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	

	<!--[if lte IE 9]>
		<style type="text/css">			
			@import url("css/ie.css") screen;
		</style>	
	<![endif]-->

	<style type="text/css">
		@import url("css/reset.css") screen;
		@import url("css/1140.css") screen;
		@import url("css/style.css") screen;
	</style>
		
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    
	<script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body id="search">

	<?php include 'php-includes/header-include.php'; ?>

	<div class="content">
		<div class="container">
			<form action="newuser.php" method="post">
				<input placeholder="Username" type="text" name="signUpUsername" />	
				<input placeholder="Password" type="password" name="signUpPassword" />
				<input placeholder="Re-Password" type="password" name="signUpRepassword" />
				<input type="submit" value="Submit" name="signUpLogin" />
			</form>
		</div>
	</div>

	<?php include 'php-includes/footer-include.php'; ?>
	
</body>
</html>