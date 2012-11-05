<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Products</title>
	<meta charset='utf-8' />     
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
		@import url("css/jquery.fancybox.css") screen;
	</style>
		
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/cart.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/products.js"></script>
    
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
	        	        
		    <?php 
		        // get category clicked to get here.
		        $selectedCategory = $_GET["category"];			

		        // select products of selected category from database.				
				$query = mysql_query("SELECT * FROM product WHERE category='$selectedCategory'") or die(mysql_error());				
																														
				// While there are more results in the result set, loop through them and get select info out.
				while ($results = mysql_fetch_array($query))
				{	
					echo"
					<div class='threecol'>
		                <div class='product num-".$results['id']."'>		                	
		                	<a href='#lBox-".$results['id']."' class='item'><img src='".$results['productImg']."' alt='".$results['productName']."'></img></a>
		                	<h3><a href='#lBox-".$results['id']."' class='item'>".$results['productName']."</a></h3>
		                	<p>$".$results['price']."</p>
		                	<a class='buy-button' id='id_".$results['id']."'>Add to Cart</a>
		                    <p>".$results['sDesc']."</p>
		                    <p> Rating: <span class='rating-".$results['rating']."'>".$results['rating']."</span></p>
		                </div>
	            	</div>
					";
					
					// Query database for this product's reviews
					$curr_id = $results['id'];
					$searchReviews = mysql_query("SELECT * FROM reviews WHERE prod_id='$curr_id'") or die(mysql_error());
					
					// Write lightbox div with reviews for each product
					echo '
						<div style="display: none;">
						<div class="lBox" id="lBox-'.$results['id'].'">
							<h3>'.$results['productName'].'</h3>
							<p class="price">$'.$results['price'].'</p>
							<img src="'.$results['productImg'].'" alt="" />
							<p>'.$results['lDesc'].'</p>
							<p><a class="buy-button" id="id_'.$results['id'].'">Add to Cart</a></p>
							
							<h4>Reviews</h4>';
							
							// If the rating isn't 0, then we know reviews have been left (minimum rating is 1)
							if ($results['rating'] != 0)	{
								while($reviews = mysql_fetch_array($searchReviews))	{
									
									echo '
										<div class="review">
											<p class="rating-'.$reviews['rating'].'">'.$reviews['rating'].'</p>
											<p>'.$reviews['reviewtext'].'</p>
											<p>by '.$reviews['user_id'].'</p>
										</div>
									';
								
								} //end while
							} //end if
							
							// If there are no reviews for this product:
							else	{
								echo '<p>Be the first to review this product.</p>';
							}
							
							include 'review.php';
							
					echo '		</div>
						</div>
					';
				}				
		    ?>
	       
    	<!-- <div class="threecol">
                <div class="product">
                    <p>HOLDER</p>
                </div>
<<<<<<< HEAD
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
=======
            </div>  -->
           
        </div><!--/.row-->	   
<!-- >>>>>>> be1af799b9cc348b1378a207647f85f67dd9fd8b -->

    </div><!--/.container-->

	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>