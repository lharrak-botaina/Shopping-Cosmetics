<?php

$sname= "localhost";
$unmae= "superuser";
$password = "p@ssword1";
$db_name = "shoppingdb_production";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
}