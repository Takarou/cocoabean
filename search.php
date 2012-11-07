<?php
	include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CocoaBean Search</title>
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
		@import url("css/jquery.fancybox.css") screen;
	</style>
		
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/products.js"></script>
    
	<script type="text/javascript" src="js/google-analytics.js"></script>
</head>
<body id="search">

	<?php include 'php-includes/header-include.php'; ?>

	<div class="content">
		<div class="container">
            
            <?php 

		        $productCount = 1;
				$searchTerm = $_POST['searchArea'];
				
				$return = array();
				$query = mysql_query("SELECT * FROM product WHERE productName LIKE '%$searchTerm%'")or die($query."<br/><br/>".mysql_error());
																														
				// While there are more results in the result set, loop through them and get select info out.
				// every four products, add class=last				

				while ($results = mysql_fetch_array($query))
				{	
					echo"
					<div class='threecol'>";

						if ($productCount%4 == 0)
						{
							// product is a factor of 4, add class=last
							echo "<div class='last product num-".$results['id']."'>";
							
						}
						else
						{
							// product is not a factor of 4, don't add class=last
							echo "<div class='product num-".$results['id']."'>";
						}

							echo "	                	
		                	<a href='#lBox-".$results['id']."' class='item'><div class='crop'><img src='".$results['productImg']."' alt='".$results['productName']."'></img></div></a>
		                	<h3><a href='#lBox-".$results['id']."' class='item'>".$results['productName']."</a></h3>
		                	<p>$".$results['price']."</p>
		                	<span class='buy-button' id='id_".$results['id']."'>Add to Cart</span>
		                    <p>".$results['sDesc']."</p>
		                    <p> Rating: <span class='rating-".$results['rating']."'>".$results['rating']."</span></p>
		                </div><!--/.product-->
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
								if ($results['rating'] != 0)	
								{
									while($reviews = mysql_fetch_array($searchReviews))	
									{
										
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
								else	
								{
									echo '<p>Be the first to review this product.</p>';
								}
								
								include 'review.php';
								
				echo '		</div><!--/.lBox-->
						</div>';

					$productCount++;

				}	
		    ?>    
		</div>
	</div>

	<?php include 'php-includes/footer-include.php'; ?>
	
</body>
</html>