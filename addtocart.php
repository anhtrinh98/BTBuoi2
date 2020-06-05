<?php 
	session_start();
	//session_destroy();
	require_once('products.php');
	$ma=$_GET['ma'];

	if (isset($_SESSION['cart'][$ma])) {
		$_SESSION['cart'][$ma]['soluong']++;
	}
	else{
		$product=$products[$ma];
		$product['soluong']=1;
		$_SESSION['cart'][$ma]=$product;
	}
	// echo "<pre>";
	// 	print_r($_SESSION['cart']);
	// echo "</pre>";
	header('Location: giohang.php');
 ?>