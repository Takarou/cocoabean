<!DOCTYPE html>
<html>
<head>
	<title>Cocoa Bean CRUD</title>
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
<body id="crud">
	
	<?php include 'php-includes/header-include.php'; ?>
	
    <div class="container">
        <h2>CRUD Admin Operations</h2>
        
        <!-- id(auto) 	featured 	productName 	sDesc 	lDesc 	category 	sku 	stock 	cost 	price 	productImg 	weight 	size -->
        
        <div class="row">
            <div class="fourcol">
                <!-- MAKE NEW PRODUCT FORM -->
                <form action="">
                    <fieldset>
                        <legend>Create New Product</legend>
        
                        <label for="productName">Product Name:</label>
                        <input type="text" id="productName" placeholder="Red Velvet Cake"></input><br/>
        
                        <label for="category">Category:</label>
                        <input type="text" id="category" placeholder="Cake"></input><br/>
        
                        <label for="isFeatured">Featured?</label>
                        <input type="radio" id="isFeatured" value="Yes">Yes</input>
                        <input type="radio" id="isFeatured" value="No"></input>No<br>
        
                        <label for="sdesc">Short Description</label>
                        <input type="text" id="sdesc" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme."></input><br/>
        
                        long-description: <input type="text" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme with full descriptive text and all the bells and whistles."></input><br/>
                        stock: <input type="text" placeholder="125"></input><br/>
                        sku: <input type="text" placeholder="CC001"></input><br/>
                        price: <input type="text" placeholder="$12.49"></input><br/>
                        cost: <input type="text" placeholder="$6.50"></input><br/>
                        productImg: <input type="text" placeholder="img/red-velvet-cake.png"></input><br/>
                        weight: <input type="text" placeholder="25g"></input><br/>
                        size: <input type="text" placeholder="5x5x2 inches"></input><br/>
        
                        <input type="submit" value="Submit New Product"></input><br/>
                    </fieldset>			
                </form>
            </div>    

    		<div class="fourcol">
                <!-- REVISE PRODUCT FORM -->
                <form action="">
                    <fieldset>
                        <legend>Revise Existing Product</legend>
        
                        <label for="productName">Product Name:</label>
                        <input type="text" id="productName" placeholder="Red Velvet Cake"></input><br/>
        
                        <label for="category">Category:</label>
                        <input type="text" id="category" placeholder="Cake"></input><br/>
        
                        <label for="isFeatured">Featured?</label>
                        <input type="radio" id="isFeatured" value="Yes">Yes</input>
                        <input type="radio" id="isFeatured" value="No"></input>No<br>
        
                        <label for="sdesc">Short Description</label>
                        <input type="text" id="sdesc" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme."></input><br/>
        
                        long-description: <input type="text" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme with full descriptive text and all the bells and whistles."></input><br/>
                        stock: <input type="text" placeholder="125"></input><br/>
                        sku: <input type="text" placeholder="CC001"></input><br/>
                        price: <input type="text" placeholder="$12.49"></input><br/>
                        cost: <input type="text" placeholder="$6.50"></input><br/>
                        productImg: <input type="text" placeholder="img/red-velvet-cake.png"></input><br/>
                        weight: <input type="text" placeholder="25g"></input><br/>
                        size: <input type="text" placeholder="5x5x2 inches"></input><br/>
        
                        <input type="submit" value="Revise Product"></input><br/>
                    </fieldset>			
                </form>
    		</div>
            
            <div class="fourcol last">
                <!-- REMOVE PRODUCT FORM -->
                <form action="">
                    <fieldset>
                        <legend>Remove Product</legend>
        
                        <label for="productName">Product Name:</label>
                        <input type="text" id="productName" placeholder="Red Velvet Cake"></input><br/>
        
                        <label for="category">Category:</label>
                        <input type="text" id="category" placeholder="Cake"></input><br/>
        
                        <label for="isFeatured">Featured?</label>
                        <input type="radio" id="isFeatured" value="Yes">Yes</input>
                        <input type="radio" id="isFeatured" value="No"></input>No<br>
        
                        <label for="sdesc">Short Description</label>
                        <input type="text" id="sdesc" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme."></input><br/>
        
                        long-description: <input type="text" placeholder="Smooth, melt-in-your-mouth chocolate with almond creme with full descriptive text and all the bells and whistles."></input><br/>
                        stock: <input type="text" placeholder="125"></input><br/>
                        sku: <input type="text" placeholder="CC001"></input><br/>
                        price: <input type="text" placeholder="$12.49"></input><br/>
                        cost: <input type="text" placeholder="$6.50"></input><br/>
                        productImg: <input type="text" placeholder="img/red-velvet-cake.png"></input><br/>
                        weight: <input type="text" placeholder="25g"></input><br/>
                        size: <input type="text" placeholder="5x5x2 inches"></input><br/>
        
                        <input type="submit" value="Remove Product"></input><br/>
                    </fieldset>			
                </form>
    		</div>
        </div><!--/.row-->
    </div><!--/.container-->


	<?php include 'php-includes/footer-include.php'; ?>
	
	</body>
</html>


	