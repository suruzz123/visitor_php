<?php 
include("db.php");
$id = $_REQUEST['id'];
$category_name = $_REQUEST['category_name'];
$category_details = $_REQUEST['category_details'];

if($id >0)
	{
		$query ="UPDATE `visitors` SET `category_name`='$category_name',`category_details`='$category_details' WHERE id = '$id'";
	}
	else
	{
		$query ="INSERT INTO `visitors`(`id`, `category_name`, `category_details`) VALUES (NULL,'$category_name','$category_details')";
	}
	$res = mysqli_query($con, $query);

if(!$res)
	{
		echo 0;
	}
	else
	{
		//echo 1;
		header('Location: category_view.php');
	}	
 ?>