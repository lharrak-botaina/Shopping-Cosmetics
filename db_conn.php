<?php

$hname= "localhost";
$uname= "superuser";
$password = "p@ssword1";
$db_name = "shoppingdb_production";
$conn = mysqli_connect($hname, $uname, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
}