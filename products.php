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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/cart.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    
	<script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body id="products">
	
	<?php include 'php-includes/header-include.php'; ?>
	
    <div class="container">
		<div class="row">
            <div class="twelvecol last"> 
                <div class="titlebar">
                    <h2> Products </h2>
                </div>
            </div>
        </div>
        
        <div class="row">
        	<div class="threecol">
                <div class="product">
                    <p>HOLDER</p>
                </div>
            </div> 
            <div class="threecol">
                <div class="product">
                    <p>HOLDER</p>
                </div>
            </div>  
            <div class="threecol">
                <div class="product">
                    <p>HOLDER</p>
                </div>
            </div>  
            <div class="threecol last">
                <div class="product">
                    <p>HOLDER</p>
                </div>
            </div>       
        </div>
	    
	    <?php 
	        // here we dynamically create this page depending on what category was clicked earlier.			
	        $selectedCategory = $_GET["category"];			
	        print("selectedCategory = ".$selectedCategory."<br/>");	

	        // select products of selected category from database.				
			$query = mysql_query("SELECT * FROM product WHERE category='$selectedCategory'") or die(mysql_error());				
																													
			// While there are more results in the result set, loop through them and echo select info out.
			while ($results = mysql_fetch_array($query))
			{					
				echo "<div class='catalog-product'>";						
					echo "<img class='catalog-product-image' src='".$results["productImg"]."' alt='".$results["productName"]."'></img>";
					echo "<p class='catalog-product-price'>$".$results["price"]."</p>";
					echo "<a class='buy-button' id='id_".$results['id']."'>Add to cart</a>";
					echo "<h3>".$results['productName']."</h3>";
					echo "<p class='catalog-description'>".$results["lDesc"]."</p>";
					echo "<p class='product-rating'>Rating: ".$results["rating"]."</p>";
				echo "</div>";
			}
	    ?>

    </div><!--/.container-->

	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>