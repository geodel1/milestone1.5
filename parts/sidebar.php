<!-- SEARCH -->
<div class="col-md-4 side-content">
	<div class="container-fluid search">
		<h3>SEARCH HERE</h3>
		<form>
		    <div class="input-group">
		    	<input type="text" class="form-control" placeholder="Search">
	    		<div class="input-group-btn">
	        		<button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	      		</div>
		    </div>
		</form>
	</div>

	<!-- CATEGORIES -->
	<div class="container-fluid categories">
		<h3>CATEGORIES</h3>
		<ul class="list-group">
			
			<a href="itemgallery.php">
			<li class="list-group-item">

			Hero Item Gallery</li></a>

			<a href="account.php">
			<li class="list-group-item">
			
			Account</li></a>

			<a href="forum.php">
			<li class="list-group-item">Forum</li></a>
		</ul>
	</div>

	<!-- ARCHIVES -->
	<div class="container-fluid">
		<div class="row">
		<?php if(!isset($_SESSION['username'])) { ?>
			<div class="col-sm-12 form-group" >
				<form method="POST">

					<h3>LOGIN</h3>
					<label>Username:</label><br>
					<input id="loginpls" type="text" name="username" placeholder="Enter username...
					" 
					><br>

					<label>Password:</label><br>
					<input type="password" name="password" placeholder="Enter password..."
					><br>
					
					<input type="submit" name="login" value="login">
				</form>
				<br>

				<h3>REGISTER</h3>
				<form method="POST">
					<label >Username:</label><br>
					<input id="registernow" type="text" name="username"	placeholder="Enter username...
					"><br>

					<label>Password:</label><br>
					<input type="password" name="password" placeholder="Enter password..."
					><br>

					<label>Confirm Password:</label><br>
					<input type="password" name="confirmpw" placeholder="Enter password...
					" 
					><br>

					<input type="submit" name="register" value="register">	
				</form>
				<br>

				
			</div>
			<?php } ?>			
		</div>			
	</div>
</div>