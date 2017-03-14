<?php


if(isset($_POST['add'])){
	$string = file_get_contents("items.json");
	$items = json_decode($string, true);

	$new_item['id'] = $_POST['id'];
	$new_item['hero'] = $_POST['hero'];
	$new_item['title'] = $_POST['title'];
	$new_item['description'] = $_POST['description'];
	$new_item['image'] = $_POST['image'];
	$new_item['genre'] = $_POST['genre'];
	$new_item['price'] = $_POST['price'];
	$new_item['stocks'] = $_POST['stocks'];
	$new_item['release_date'] = $_POST['release_date'];


	$items[] = $new_item;

	$fp = fopen('items.json', 'w');
	fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
	fclose($fp);
}

?>