<?php

$heroitem = [
	['hero' => 'ember spirit',
	'title' => 'blaze armor',
	'description' => 'rare',
	'image' => 'images/es.jpeg',
	'genre' => 'full set',
	'price' => '$ 3.99',
	'stocks' => 'available',
	'release_date' => 'April 1, 2015'],

	['hero' => 'omni knight',
	'title' => 'grey gallant',
	'description' => 'rare',
	'image' => 'images/omniknight.jpeg',
	'genre' => 'full set',
	'price' => '$ 5.99',
	'stocks' => 'available',
	'release_date' => 'April 2, 2015'],

	['hero' => 'phantom assasin',
	'title' => 'phantom menace',
	'description' => 'rare',
	'image' => 'images/pa.jpeg',
	'genre' => 'full set',
	'price' => '$ 8.99',
	'stocks' => 'available',
	'release_date' => 'June 1,2015'],

	['hero' => 'rubick',
	'title' => 'diviner embrace',
	'description' => 'common',
	'image' => 'images/rubick.jpeg',
	'genre' => 'full set',
	'price' => '$ 2.99',
	'stocks' => 'unavailable',
	'release_date' => 'June 2,2015'],

	['hero' => 'sand king',
	'title' => 'elusive	destroyer',
	'description' => 'common',
	'image' => 'images/sk.jpeg',
	'genre' => 'full set',
	'price' => '$ 2.99',
	'stocks' => 'unavailable',
	'release_date' => 'June 3,2015'],

	['hero' => 'sniper',
	'title' => 'keen machine',
	'description' => 'rare',
	'image' => 'images/sniper.jpeg',
	'genre' => 'full set',
	'price' => '$ 4.99',
	'stocks' => 'available',
	'release_date' => 'June 4,2015'],


];
	$count = 0;
	foreach ($heroitem as $row) {
		$hero = $row['hero'];
		$title = $row['title'];
		$description = $row['description'];
		$image = $row['image'];
		$genre = $row['genre'];
		$price = $row['price'];
		$stocks = $row['stocks'];
		$release_date = $row['release_date'];


		echo "<div class= 'col-sm-4 col-xs4'> ";
		echo "<div class= 'thumbnail'>";
		echo "<img src = '$image'>";
		echo "<p>$hero</p>";
		echo "<p>$title</p>";
		echo "<p>$description</p>";
		echo "<p>$genre</p>";
		echo "<p>$price</p>";
		echo "<p>$stocks</p>";
		echo "<p>$release_date</p>";

		echo "
			<button class='btn' data-toggle='modal' data-target='#hero$count'>Order now!
			</button>";
		echo "</div>";
		echo "</div>";	
?>
		<div class="modal fade" id="<?php echo 'hero'.$count; ?>" role="dialog">
			<div class="modal-dialog">
				<!-- modal content -->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
						</button>
						<h4><span class="glyphicon glyphicon-lock"></span>Prices</h4>
					</div>
					
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span>

								<?php
								echo "<img src='$image'>$price";
								?>

								</label>
								<input type="number" class="form-control" id="psw" placeholder="Quantity?">
							</div>
							
							<div class="form-group">
								<label for="username"><span
								class="glyphicon glyphicon-user"></span>Steam account</label>
									
								<input type="text" class="form-control" id="username" placeholder="Enter email">

								<input type="text" class="form-control" id="password" placeholder="Password">
							</div>		
								<button type="submit" class="btn btn-block"><a href =#loginpls> Please Log in!</a>
									<span class="glyphicon glyphicon-ok">				
									</span>
								</button>

						</form>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
							<span class="glyphicon glyphicon-remove">
							</span> Cancel
						</button>
						
					</div>			
				</div>
			</div>		
		</div>
<?php
	$count++;
	}	
?>