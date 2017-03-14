<?php
// session_start();
$string = file_get_contents("items.json");
$items = json_decode($string, true);

$product_array = $items;
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>

<div class='product-item col-sm-4 col-xs4		'>
	<form method='post' action='deleteitems.php?key=<?php echo $key; ?>'>
	<div class="product-image">
		<img src="<?php echo $items[$key]["image"]; ?>">
	</div>
	<div><strong><?php echo $product_array[$key]["title"]; ?></strong></div>
	<div class="product-price"><?php echo $product_array[$key]["price"]; ?></div>
	<div>
		

	</div>
	</form>
</div>






<?php }} ?>