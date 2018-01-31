<?php

// includes a the database script in the portfolio script so that the variables and methods can be used
include_once("database.php");

//creates a database connection with appropriate arguments and stores it in a variable
$db = dbConnect();

//sets up an SQL query so that it can be used to extract all the data form the table
$sql = "SELECT * FROM blog ORDER BY Date_ ASC";

//runs mysqli_query() function with the database connection and the sql query as arguments and stores it in a
//variable, this runs the query on the specified table in a database, if it fails it will run the error fucntion
$sql_result = mysqli_query($db, $sql) or die(mysqli_error($db));

//this while loop will go through the array $row and enter the values associated values with field names such 'ID' 
//the variables in the specified variables input data based on the associated values into defined variable
$i=0;
while($elememt_row = mysqli_fetch_assoc($sql_result))
{
	$name[$i] = $elememt_row["NAME"];
	$description[$i] = $elememt_row["DESCRIPTION"];
	$date[$i] = $elememt_row["DATE_"];
	$i++;
}


?>

