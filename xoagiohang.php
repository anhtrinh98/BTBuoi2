<?php 
	session_start();
	$ma=$_GET['ma'];
	if ($_SESSION['cart'][$ma]['soluong']>1) {
		$_SESSION['cart'][$ma]['soluong']--;
	}
	else{
		unset($_SESSION['cart'][$ma]);
	}
	header('Location: giohang.php');
 ?>