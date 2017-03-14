<?php
	session_start();
	if ($_SESSION['role']=='admin') {
			echo "<h1>Admin Page</h1>
					Restricted access.";

	} else {
		echo "You do not have permission to acccess this page. <br>";
		echo "Register/Login <a href='userlogin.php'>here</a>";
	}



?>