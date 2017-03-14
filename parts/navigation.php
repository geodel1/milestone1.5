<ul class="nav navbar-nav navbar-right">
				<li><a href="#myPage">Home</a></li>
				<li><a href="#design">Contact us!</a></li>
				

				<!-- addditional menu -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">More
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Tournaments</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Media</a></li>
					</ul>
				</li>

				<li><a href="#registernow">Register</a></li>

				
				<?php if(isset($_SESSION['username'])){

				?>
				<li><a href="logout.php">Logout</a></li>
				<?php } else {echo "";}
				?>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="">
					<span class="glyphicon glyphicon-search"></span></a>
					<ul class="dropdown-menu">
						<input type="text" placeholder="Search keyword.." id="myInput" onkeyup="filterFunction()">
						<li>Designers</li>
						<li>Design</li>
						<li>Locations</li>
					</ul>
				</li>
			</ul>