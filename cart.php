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
<body id="cartProducts">
	
	<?php include 'php-includes/header-include.php'; ?>
	
    <div class="container">

        <?php 
            $cartContents = $_SESSION['cart'];
            print_r($cartContents);

            $sizeOfCart = count($cartContents);
         ?>

		<div class="row">
            <div class="twelvecol last"> 
                <div class="titlebar">
                    <h2> Products in Cart</h2>
                </div>
            </div>
        </div>
        
        <div class="cartContents">

            <?php 
                for ($count=1; $count < $sizeOfCart+1; $count++)
                {
                    echo"
                        <div class='row'>
                            <div class='twocol'></div>

                            <div class='onecol'>
                                <div class='product'>
                                    <p>$count</p>
                                </div>
                            </div>

                            <div class='twocol'>
                                <div class='product'>
                                    <p>THUMBNAIL</p>
                                </div>
                            </div>  

                            <div class='twocol'>
                                <div class='product'>
                                    <p'product'NAME</p>
                                </div>
                            </div>  

                            <div class='twocol'>
                                <div class='product'>
                                    <p>SHORT DESC</p>
                                </div>
                            </div>

                            <div class='twocol'>
                                <div class='product'>
                                    <p>PRICE</p>
                                </div>
                            </div>  

                            <div class='onecol last'>
                                <div class='product'>
                                    <p>HOLDER</p>
                                </div>
                            </div>     
                                
                        </div><!--/.row-->";
                }

             ?>    
        
        </div><!--/.cartContents-->	   
        
        <div class="row">
        	<div class="total">
            	<div class="sevencol">
                </div>
            	<div class="twocol">
                	<p>TOTAL</p>
                </div>
                <div class="threcol last">
                	<p>500 million and 2 dollars</p>
                </div>
            </div>
        </div>
   
		<div class="row">
        	<div class="ninecol">
            </div>
            <div class="threecol last">
            	<div class="continue">
            		<a href="checkout.php">Continue to Checkout</a>
                </div>
            </div>
        </div>                

    </div><!--/.container-->

	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>