<?php

//Start Session
session_start();


//create Constants to store Non Repeating Values
define('SITEURL','http://localhost/yummy/Yummy/Order_food/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','yummy');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //Databse connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting Database
?>   