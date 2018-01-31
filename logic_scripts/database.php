<?php
//a function that takes in 4 argumetns 
function dbConnect(/*$host, $user, $pass, $dbtable*/)
{
	//if empty values are entered, the default values are used
	$defaultHost = "127.0.0.1";
	$defaultUser = "root";
	$dafaultPassword = "battleshipsx";
	$dafaultDbtable = "battleships";
	
	//if($host=="" || $user=="" || $pass=="" || $dbtable=="")
	//{
		//establishing connection between my database and the server so that the php files can access the database
		//this is done by using dafault values 
		//if the conection fails the die(mysql_error()); fucntion post a meaningful error message (die executes if the connection fails)
		$database = mysqli_connect($defaultHost, $defaultUser, $dafaultPassword, $dafaultDbtable)or die(mysql_error());
		return $database;
		echo "<p> Succesfully default";
	/*
	}
	else 
	{
		
		//establishing connection between my database and the server so that the php files can access the database
		//this is done by using the passed arguments as values 
		$database = mysqli_connect($host, $user, $pass, $dbtable) or die(mysql_error());
		echo "<p> Succesfully based";
	}
	*/
}
?>