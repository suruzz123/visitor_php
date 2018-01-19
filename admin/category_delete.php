<?php 
include("db.php");
$id = $_REQUEST['id'];
$query ="DELETE FROM `visitors` WHERE id = '$id'";
$res =mysqli_query($con, $query);
if (!$res) {
	echo 0;
}
else
{
	echo 1;
	header('Location: category_view.php');
}
?>