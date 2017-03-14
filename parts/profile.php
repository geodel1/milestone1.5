<?php 
	if(isset($_SESSION['username'])) { 
		$username = $_SESSION['username'];
		echo "<h1><i class='glyphicon glyphicon-user'></i>
		Hi $username ! </h1>";
	} 

?>

<div>
	<h3>
	<a href='cart.php' class ='btn-primary'>
		<i class='glyphicon glyphicon-shopping-cart'></i>
		<span class ='badge'>
		


		</span>
	</a>

	<a href="#" class='btn-success'>
		<i class='glyphicon glyphicon-th-list'></i>Transactions
	</a>
	</h3>
</div>