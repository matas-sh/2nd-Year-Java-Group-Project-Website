
<?php
session_start();
$_SESSION["admin"] = false;
	if(isset($_POST['submit']))
	{
		include_once("database.php");
		
		
		$db = dbConnect();
		
		$usn= $_POST['username'];
		$pwd= $_POST['password'];
		
		$hashedPwd= hash('sha512',$pwd);
		
		//try salt
		
		$sql= "SELECT 1 FROM users WHERE userName='$usn' AND passName='$hashedPwd'";
		
		$sqlResult= mysqli_query($db,$sql)or die(mysqli_error());
		
		$i= mysqli_num_rows($sqlResult);
		
		if(0 < $i && $i < 2)
		{
			echo "<p>sucess</p>";
			$_SESSION["admin"] = true;
			header('location: ../control_panel.php');
		}
		else
		{
			echo "<p >Wrong credentials. Try again...</p>";
		}
	}

?>