<?php

session_start();
$string = file_get_contents("items.json");
$items = json_decode($string, true);


if(isset($_SESSION['cart_items'])){
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


		echo "<div class='item_image'><img src='$image'></div>";
		
		echo "<h3>$hero</h3> <h5>$title</h5> $description <br> Php $price";

		echo "<div style='clear:both'></div>";
	}
}

?>