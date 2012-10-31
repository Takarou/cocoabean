<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Products</title>
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
<body>
	
	<?php include 'php-includes/header-include.php'; ?>
	
    <div class="container">
    <h2>Products</h2>
    
    <?php 
        // here we dynamically create this page depending on what category was clicked earlier.			
        $selectedCategory = $_GET["category"];			
        print("selectedCategory = ".$selectedCategory);			
    ?>

    </div><!--/.container-->

	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>