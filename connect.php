<?php
$hostname  = 'admin.ciysfucjh7bk.us-east-2.rds.amazonaws.com';
$username = 'admin';
$password='admin123';
$dbname = 'mydb';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
