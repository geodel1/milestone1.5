<?php

// session_start();
$string = file_get_contents("items.json");
$items = json_decode($string, true);


if(isset($_SESSION['cart_items'])){
	echo "<h3><i class='glyphicon glyphicon-shopping-cart'></i>Items in Cart</h3>";

	echo "<table class='table table-striped table-bordered'>";
		echo "<thead>";
		echo "<tr>";
		echo    "<th>Hero</th>";
		echo    "<th>Title</th>";
		echo    "<th>Price</th>";
		echo    "<th>Quantity</th>";
		echo    "<th>Action</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		$sum = 0;
	foreach ($_SESSION['cart_items'] as $key => $quantity) {
		$id = $items[$key]['id'];
		$hero = $items[$key]['hero'];
		$title = $items[$key]['title'];
		$description = $items[$key]['description'];
		$image = $items[$key]['image'];
		$genre = $items[$key]['genre'];
		$price = $items[$key]['price'];
		$stocks = $items[$key]['stocks'];
		$release_date = $items[$key]['release_date'];
		$p = (double)substr($price,2);
		$sum += $quantity*$p; 
		echo "<tr>";
		echo "<td>$hero</td>";
		echo "<td>$title</td>";
		echo "<td>$price</td>";
		echo "<td>$quantity</td>";
		echo "<td><a href='parts/deletecarts.php?deletecarts=$key'><button class='btn'>Delete items
			</button></a></td>";
		echo "</tr>";

		
	}

	echo "</tbody>";
	echo "</table>";
	echo "<div><h3><strong>Total	$sum</strong></h3>
		<span><button class= 'btn'>Check out! </button></span> 
		</div>";
	
}



?>