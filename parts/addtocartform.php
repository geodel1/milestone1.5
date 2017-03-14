<?php
// session_start();
$string = file_get_contents("items.json");
$items = json_decode($string, true);

$product_array = $items;
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>
<div class="product-item">
	<form method='post' action='addtocart.php?key=<?php echo $key; ?>'>
	<div class="product-image">
		<img src="<?php echo $items[$key]["image"]; ?>">
	</div>
	<div><strong><?php echo $product_array[$key]["title"]; ?></strong></div>
	<div class="product-price"><?php echo $product_array[$key]["price"]; ?></div>
	<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
	</form>
</div>

<?php }} ?>