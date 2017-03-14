<?php

	session_start();
	$key = $_GET['key'];

	if(isset($_SESSION['cart_items'][$key])){
		$_SESSION['cart_items'][$key]+= $_POST['quantity'];
			header('location:account.php');
	} else {
		$_SESSION['cart_items'][$key] = $_POST['quantity'];
			header('location:account.php');

	}





?>

<?php //}} ?>