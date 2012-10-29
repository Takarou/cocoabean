<header>
	<div id="logo">
		<h1><a href="index.php">Cocoa Bean</a></h1>
	</div>
	
	<form method="post" action="search.php" id="searchform"> 
		<input type="search" id="searchbox" /> 
		<input type="submit" id="search" value="Search" />
	</form>

	<div class="cart">		
		<form action="login.php" method="post">
			<input id="login-username" placeholder="Username" type="text"></input>	
			<input id="login-password" placeholder="Password" type="text"></input>
			<input id="login-submit" type="submit" value="Submit"></input>
			<a id="login-signup" href="#">Sign up</a>
		</form>
		
		<div id="cart-contents">			
			<a href="cart.php">In your cart: 3 items</a><br/>			
			<a href="cart.php" id="cart-checkout">Checkout</a><br/>
		</div>		
		<div id="cart-image"></div>
	</div><!--/.cart-->
		
	<nav>
		<ul>
			<li><a href="products.php?category=cheesecake">Cheesecake</a></li>
			<li><a href="products.php?category=truffles">Truffles</a></li>
			<li><a href="products.php?category=fruit">Fruit</a></li>
			<li><a href="products.php?category=cupcakes">Cupcakes</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>	
	</nav>				
</header>