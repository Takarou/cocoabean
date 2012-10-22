<<!DOCTYPE html>
<html>
<head>
	<title>Cocoa Bean: Gourmet Chocolate Treats</title>
	<meta charset='utf-8'> 
	
	<link rel="stylesheet" href="css/style.css" media="screen" />
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35778705-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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