<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

</head>
<body id="myPage">
	<!-- BANNER -->

<nav class="navbar navbar-default navbar-fixed-top">
	<!-- logo portion -->
	<div class="container-fluid">
		<div class="navbar-header">
			<?php require_once('parts/logo.php'); ?>
		</div>
	
	<!-- right portion -->
		<div class="collapse navbar-collapse" id="myNavbar">
			
			<?php require_once('parts/navigation.php');
			?>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div id="myCarousel" class="carousel slide" >
		<?php require_once('parts/carousel.php'); ?>
		
	</div>
</div>
	

<!-- MAIN -->
<div class="container">
	<div class="row main">
		
	<!-- main -->
		<?php require_once('parts/main.php'); ?>	



	<!-- SIDEBAR -->
		

		<?php require_once('parts/sidebar.php');	?>
		

	</div> 
</div> <!-- end of main -->


<!-- FOOTER-1 -->
<div class="container-fluid footer-1"> 
	<?php require_once('parts/footerone.php'); ?>
</div> <!-- end of footer-1 -->

</body>
</html>

<script>
$(document).ready(function(){
	






  // Add smooth scrolling to all links in navbar + footer link
  $(".footer-2 .container a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>