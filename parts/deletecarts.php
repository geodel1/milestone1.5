<?php
$key = $_GET['deletecarts'];

session_start();
unset($_SESSION ['cart_items'][$key]);

header('Location:../account.php');
?>