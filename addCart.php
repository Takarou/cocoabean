<?php
	session_start();
	include 'database.php';
	
	$testId = $_POST['id'];
	$item = array(
		'name' => '',
		'qty' => 1,
		'img' => '',
		'price' => ''
	);
	$testQuery = mysql_query("SELECT * FROM product WHERE id='$testId'");
	while($results = mysql_fetch_array($testQuery)){
		if(array_key_exists($results['id'], $_SESSION['cart'])){
			$_SESSION['cart'][$results['id']]['qty'] += 1;
			$_SESSION['cart'][$results['id']]['price'] = $results['price'] * $_SESSION['cart'][$results['id']]['qty'];
		}else{
			$item['name'] = $results['productName'];
			$item['price'] = $results['price'];
			$item['img'] = $result['productImg'];
		
			$_SESSION['cart'][$results['id']] = $item;
		}
	}
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
		$saveCart = json_encode($_SESSION['cart']);
		mysql_query("UPDATE users SET cart='$saveCart' WHERE username='$user'");
		echo $saveCart;
		
	}else{
		json_encode($_SESSION['cart']);
	}
?>
