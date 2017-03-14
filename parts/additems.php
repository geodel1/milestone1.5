<?php function displayheroitem(){ ?>

<div class="col-md-8">

<?php 
	if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){ ?>
	<h3>Add New Item</h3>
	<form class="form-horizontal" method='post'>
		<div class="form-group">
			<label class="col-xs-2" for="id">ID:</label>
			<input class="col-xs-4" type="text" class="form-control" name="id">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="hero">Hero:</label>
			<input class="col-xs-4" type="text" class="form-control" name="hero">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="title">Title:</label>
			<input class="col-xs-4" type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="description">Description:</label>
			<input class="col-xs-4" type="text" class="form-control" name="description">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="price">Image:</label>
			<input class="col-xs-4" type="text" class="form-control" name="image">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="image">Genre:</label>
			<input class="col-xs-4" type="text" class="form-control" name="genre">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="category">Price:</label>
			<input class="col-xs-4" type="text" class="form-control" name="price">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="category">Stocks:</label>
			<input class="col-xs-4" type="text" class="form-control" name="stocks">
		</div>
		<div class="form-group">
			<label class="col-xs-2" for="category">Release Date:</label>
			<input class="col-xs-4" type="text" class="form-control" name="release_date">
		</div>
		<input type="submit" name="add" value="Add Item">
	</form>
<?php }else echo "Please log in as admin." ?>
</div>

<?php } ?>