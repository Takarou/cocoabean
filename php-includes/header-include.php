<?php
	session_start();
	include 'database.php';
	
	if(!isset($_SESSION['cart'])){
		$cart = array(
			'name' => 'test',
			'cost' => 0
		);
		$_SESSION['cart'] = $cart;
	}else if(isset($_SESSION['cart'])){
		print_r($_SESSION['cart']);
	}
?>
<header>
	<div class="row">
    	<div class="logo">
            <div class="twocol last">
                <img src="img/logo.png" alt="logo" />
            </div>
        </div>
 
    	<div class="moved">   
            
            <div class="threecol">
                <h1 class="logo"><a href="index.php">Cocoa Bean</a></h1>
            </div>
    
            <div class="check">
            <div class="threecol">
            	
                    <form method="post" action="search.php" id="searchform"> 
                        <input type="search" id="searchbox" /> 
                        <input type="submit" id="search" value="Search" />
                    </form>
                </div>
            </div>
            
            
            <div class="cart">
                    
            	<?php
					// if user already exists, switch login form for logout form in header-include.
					if(isset($_SESSION['user']))
					{
						echo '<span>Welcome: '.$_SESSION['user'].'</span>&nbsp;<span><a href="logout.php">Logout</a></span>';
					}
					else
					{
						// if user does not already exist, check for valid login credentials.
						if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
							$username = $_POST['username'];
							$username = stripslashes($username);
							$username = mysql_real_escape_string($username);
							$password = $_POST['password'];
							$password = stripslashes($password);
							$password = mysql_real_escape_string($password);
							$password = md5($password);
							
							if(isset($_POST['login']) && !empty($username) && !empty($password))
							{
								$userQuery = mysql_query("SELECT username FROM users WHERE username='$username' AND password='$password'");
								
								$count = mysql_num_rows($userQuery);

								if($count == 1)
								{
									$_SESSION['user'] = $username;
									header('location: index.php');
								}
								else
								{
									echo "Incorrect Username or Password";
								}
							}
						}
						echo '<form action="" method="post">
								<div class="onecol">
									<input id="login-username" placeholder="Username" type="text" name="username" />
								</div>
								<div class="onecol">
									<input id="login-password" placeholder="Password" type="password" name="password" />
								</div>
								<div class="onecol">
									<input id="login-submit" type="submit" value="Submit" name="login" />
								</div>
								<div class="onecol last">
									<a id="login-signup" href="signup.php">Sign up</a>
								</div>
							</form>';
					} // /else

				?>
                                  
			</div>
        </div>
	</div>
        		
    
    <div class="row">
	<nav>
		<ul>
			<div class="onecol"><li><a href="index.php">Home</a></li></div>
			<div class="onecol"><li><a href="products.php?category=Cakes">Cakes</a></li></div>
			<div class="onecol"><li><a href="products.php?category=Cheesecake">Cheesecake</a></li></div>
			<div class="onecol"><li><a href="products.php?category=Druit">Drinks</a></li></div>
			<div class="onecol"><li><a href="products.php?category=Fruit">Fruit</a></li></div>
			<div class="onecol"><li><a href="products.php?category=Specialty">Specialty</a></li></div>
			<div class="onecol"><li><a href="contact.php">Contact</a></li></div>
        </ul>	
	</nav>
    
	

	
		
        <div id="cart-contents">
        	<div class="onecol"></div> 			
	    	<div class="twocol">
                <a href="cart.php">In your cart: 3 items</a><br/>			
			</div>
            <div class="onecol">
                <a href="cart.php" id="cart-checkout">Checkout</a><br/>
            </div>
        </div>
        	
        <div class="onecol last">
			<img src="img/cart.png" alt="cart" />
		</div>
    
    <div class="row">
    	<div class="twelve last">
        	<div class="line"></div>
        </div>
   	</div>				
</header>