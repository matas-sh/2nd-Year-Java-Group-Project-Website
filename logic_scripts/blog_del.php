<?php
session_start();

if($_SESSION["admin"]== true)
{
	//include_once("delete.php");
	include_once("database.php");

	$db = dbConnect();

	$sql= "SELECT Name FROM blog ORDER BY ID ASC";

	$result = mysqli_query($db, $sql)or die(mysqli_error($db));

	$i=0;

	while($row = mysqli_fetch_assoc($result))
	{

		$name_array[$i] = $row['Name'];
		$i+=1;
		
	}


	if(isset($_POST['delete']))
	{
	$selected_option = $_POST['postName'];

	$sql_delete = "DELETE FROM blog WHERE Name = '$selected_option'";
	
	if(mysqli_query($db, $sql_delete)or die(mysqli_error($db)))
	{
		echo "<p> succesfully deleted</p>";
	}
	else
	{
		echo "<p> could not be deleted</p>";
	}
	}
}
else 
{
	header('location: unauthorised.php');
}



?>