<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Products</title>
	<meta charset='utf-8'> 
	
	<link rel="stylesheet" href="css/style.css" media="screen" />
    
    <script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body>
	
	<?php include 'php-includes/header-include.php'; ?>
	
	<div class="content">
		<div class="container">
		<h2>Products</h2>
		
		<?php 
			// here we dynamically create this page depending on what category was clicked earlier.			
			$selectedCategory = $_GET["category"];			
			print("selectedCategory = ".$selectedCategory);			
		?>

		</div><!--/.container-->
	</div><!--/.content-->

	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>