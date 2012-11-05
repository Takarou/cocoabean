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
		$item['name'] = $results['productName'];
		$item['price'] = $results['price'];
		
		$_SESSION['cart'][$results['id']] = $item;
	}
	print_r($_SESSION['cart']);
?>
