<?php 
function displayheroitem(){ 

	echo "<div class='col-md-8 '>";

		require_once('cart.php');

	echo "</div>";

	echo "<div class='col-md-4 '>";

		require_once('parts/profile.php');
		

	echo "</div>";



	echo "<div class='col-md-8 thumbnail'>";

	require_once('parts/addtocartform.php');
	
	// require_once('parts/addtocart.php');
	
	echo "</div>";

}


require_once('home.php'); 



?>
