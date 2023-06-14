<?php
$hostname  = 'database-1.cssjsx9cgosf.us-east-1.rds.amazonaws.com';
$username = 'admin';
$password='admin123';
$dbname = 'mydb';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
