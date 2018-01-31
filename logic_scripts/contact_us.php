
<?php
ini_set('display_errors',1); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE); 
	include_once('database.php');
session_start();
ob_start();
include_once("database.php");
	//taking the values from contact me form and storing it into local variables
if(isset($_POST['Send']))
{	

	$db = dbConnect();
	$sendersNam = $_POST['name'];
	$ms = $_POST['message'];
	$emailAddres = $_POST['email'];
	
	$sendersName = mysqli_real_escape_string($db, $sendersNam);
	$msg = mysqli_real_escape_string($db, $ms);
	$emailAddress = mysqli_real_escape_string($db, $emailAddres);
	
	
	//creating an email message to pass on to the mail function 
	
	$email = "From: $emailAddress \n\n";
	$email .= "Name: $sendersName \n\n";
	$email .= "Message: $msg \n\n";
	
	//creating the mail headers to pass into mail function, mail headers fill up the form on your email for From and reply to.
	
	$mailHeaders = "From: My website <symransart@gmail.com>\n";
	$mailHeaders .= "Reply-to:$emailAddress\n\n";
	
	
	//mail function sends the email to a desired email address.
	//the function takes in 4 arguments, the email recipient, the seubject, the message and the mail headers
	mail("bshipsx@gmail.com","", $email, $mailHeaders);
	
	//prints a thank you message to the user
	echo "<h2>Thank you $sendersName! </h2>\n";
	echo "<p> We appreciate you interest. </p>";
	

}
	
?>
