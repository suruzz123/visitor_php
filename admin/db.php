<?php
$hostname = "localhost";
$username ="root";
$password = "";
$db_name = "visitor";
$con = mysqli_connect($hostname, $username, $password, $db_name);
if (!$con) {
	//echo "Not Connected";
}
else
{
	//echo "Successfully Connected";
}
 ?>