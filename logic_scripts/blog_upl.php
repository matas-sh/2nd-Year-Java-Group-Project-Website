<?php
session_start();

if($_SESSION["admin"]== true)
{
	//checks whether the variable is 'set' essentially it checks whether the variable is null or not,
	//so in this case if $_POST['upload'] contains a value. return false if the variable is false and tru if otherwise
	if(isset($_POST['upload']))
	{
		//includes the databases script
		include_once("database.php");
		
	
		//connects to the database
		$db = dbConnect();
		
		$msg="";
		
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$date = mysqli_real_escape_string($db, $_POST['date']);
		
		
		$myquery = "INSERT INTO blog (Name, Description, Date_) VALUES ('$name', '$description', '$date')";
		
		
		if(mysqli_query( $db, $myquery)or die(mysqli_error($db)))
		{
			$msg = "Blog Post uploaded";
			header('Location:../blog.php');
		}
		else 
		{
			$msg = "Blog Post upload failed";
		}
		echo $msg; 
	}
}
else
{
	header('location: unauthorised.php');
}
?>
