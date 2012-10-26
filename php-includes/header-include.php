<header>
	<h1 id="logo"><a href="index.php">Cocoa Bean: Gourmet Chocolate Treats</a></h1>	

	<form method="post" action="search.php" id="searchform"> 
		<input type="search" id="searchbox" /> 
		<input type="submit" id="search" value="Search" />
	</form>

	<div class="cart">
		<a id="signup" href="#">Sign up</a>

		<form action="login.php" method="post">
			<input id="username" placeholder="Username" type="text"></input>			
			<input id="password" placeholder="Password" type="text"></input>
			<input type="submit" value="Submit"></input>
		</form>

		<div id="cart-image">
			<a href="cart.php">Checkout</a>
		</div>
		<a href="cart.php">3 items</a>
	</div>
		
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