<?php
session_start();

if($_SESSION["admin"]== true)
{
	//checks whether the variable is 'set' essentially it checks whether the variable is null or not,
	//so in this case if $_POST['upload'] contains a value. return false if the variable is false and tru if otherwise
	if(isset($_POST['change']))
	{
		//includes the databases script
		include_once("database.php");
		
	
		//connects to the database
		$db = dbConnect();
		
		$title = mysqli_real_escape_string($db,$_POST['title']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		
		
		$myquery = "UPDATE about SET ID=1, TITLE='$title', CONTENT='$description' WHERE ID=1";
		
	
		if(mysqli_query( $db, $myquery)or die(mysqli_error($db)))
		{
			$msg = "About Us changed";
			header('Location:../about_us.php');
		}
		else 
		{
			$msg = "Failed to change About Us";
		}
		echo "<p>".$msg."</p>"; 
	}
}
else
{
	header('Location: unauthorised.php');
	echo "<p> Unauthorised access. Please login </p>";
}
?>
