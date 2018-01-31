<?php

session_start();
if($_SESSION["admin"]==true)
{
	if(isset($_POST['submit']))
	{
		session_destroy();
		header('location: ../blog.php');
	}
}
else
{
	header('Location: unauthorised.php');
}
?>
