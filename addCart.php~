<?php
	session_start();
	include 'database.php';
	
	$testId = $_POST['id'];
	$item = array(
		'name' => '',
		'price' => ''
	);
	$testQuery = mysql_query("SELECT * FROM product WHERE id='$testId'");
	while($results = mysql_fetch_array($testQuery)){
		foreach($_SESSION['cart'] as $key => $id){
			$item['name'] = $results['productName'];
			$item['price'] = $results['price'];
		}
		$_SESSION['cart'][] = $item;
	}
	print_r($_SESSION['cart']);
?>