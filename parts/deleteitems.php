<?php

$title = $_GET['title'];
//JSON FILE
$string = file_get_contents("items.json");
$items = json_decode($string, true);

//pinpoint an array
$index = array_search($title,array_column($items, 'title'));

//to delete
unset($items[$index]);

//to show again the new array
$fp = fopen('items.json', 'w');
fwrite($fp, json_encode($items, JSON_PRETTY_PRINT));
fclose($fp);

//no need to refresh
header('location:admin.php');



echo "<a href='delete.php?title=$title'><button style='color:Black; margin: 20px;'>Delete</button></a>";

?>