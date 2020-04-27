<?php
require_once "password.php";
$dsn = "mysql:host=127.0.0.1; dbname=mobwebapp2020";
$db  = new PDO($dsn, "mwauser20", $password);//DB password is the most important password

?>
