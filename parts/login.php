<?php
// $users = [
// 	['username' => 'admin', 
// 	'password' => 'admin',
// 	'role' => 'admin'],
// 	['username' => 'peejay',
// 	'password' => 'password',
// 	'role' => 'regular'],
// 	['username' => 'test',
// 	'password' => 'password',
// 	'role' => 'regular'],
// 	['username' => 'newuser',
// 	'password' => 'newpassword',
// 	'role' => 'regular']
// ];

// to create a json file
	// $fp =fopen('users.json', 'w');
	// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	// fclose($fp);

// to get the json file into php and create an array



$string = file_get_contents("users.json");
$users = json_decode($string,true);

// echo $_SESSION['role'];

if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password = sha1($_POST['password']);

	foreach ($users as $user) {
		if ($username==$user['username'] &&
			$password==$user['password']){
				

				$_SESSION['username'] = $username;
				$_SESSION['role'] = $user['role'];
				if($_SESSION['role']=='regular')
					header('location:account.php');
				else
					header("location:admin.php");

		}		
	}

}

if (isset($_POST['register'])){
	$new_user = ['username' => $_POST['username'],
				'password' =>sha1($_POST['password']),
				'role' => 'regular'];

	if ($_POST['password']==$_POST[	'confirmpw']){
		

		$users[] = $new_user;

		$fp =fopen('users.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);

		
	}
	

}
?>