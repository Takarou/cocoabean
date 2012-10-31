<?php
	session_start();
	include 'database.php';
?>
<header>
	<div id="logo">
		<h1><a href="index.php">Cocoa Bean</a></h1>
	</div>
	
	<form method="post" action="search.php" id="searchform"> 
		<input type="search" id="searchbox" name="searchArea" /> 
		<input type="submit" id="search" value="Search" />
	</form>

	<div class="cart">	
		<?php
			if(isset($_SESSION['user'])){
				echo '<span>Welcome: '.$_SESSION['user'].'</span>&nbsp;<span><a href="logout.php">Logout</a></span>';
			}else{
				if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
					$username = $_POST['username'];
					$username = stripslashes($username);
					$username = mysql_real_escape_string($username);
					$password = $_POST['password'];
					$password = stripslashes($password);
					$password = mysql_real_escape_string($password);
					$password = md5($password);
					
					if(isset($_POST['login']) && !empty($username) && !empty($password)){
						$userQuery = mysql_query("SELECT username FROM users WHERE username='$username' AND password='$password'");
						
						$count = mysql_num_rows($userQuery);
						if($count == 1){
							$_SESSION['user'] = $username;
							header('location: index.php');
						}else{
							echo "Incorrect Username or Password";
						}
					}
				}
				echo '<form action="" method="post">
						<input id="login-username" placeholder="Username" type="text" name="username" />	
						<input id="login-password" placeholder="Password" type="password" name="password" />
						<input id="login-submit" type="submit" value="Submit" name="login" />
						<a id="login-signup" href="signup.php">Sign up</a>
					</form>';
			}
		?>
		<div id="cart-contents">			
			<a href="cart.php">In your cart: 3 items</a><br/>			
			<a href="cart.php" id="cart-checkout">Checkout</a><br/>
		</div>		
		<div id="cart-image"></div>
	</div><!--/.cart-->
		
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="products.php?category=Cakes">Cakes</a></li>
			<li><a href="products.php?category=Cheesecake">Cheesecake</a></li>
			<li><a href="products.php?category=Druit">Drinks</a></li>
			<li><a href="products.php?category=Fruit">Fruit</a></li>
			<li><a href="products.php?category=Specialty">Specialty</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>	
	</nav>				
</header>