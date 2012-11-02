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
                    
                <form action="login.php" method="post">
                    <div class="onecol">
                    <input id="login-username" placeholder="Username" type="text"></input>	
                    </div>
                    <div class="onecol">
                    <input id="login-password" placeholder="Password" type="text"></input>
                    </div>
                    <div class="onecol">
                    <input id="login-submit" type="submit" value="Submit"></input>
                    </div>
                    <div class="onecol last">
                    <a id="login-signup" href="#">Sign up</a>
                    </div>
                </form>
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
    </nav>
    
    <div class="row">
    	<div class="twelve last">
        	<div class="line"></div>
        </div>
   	</div>				
</header>