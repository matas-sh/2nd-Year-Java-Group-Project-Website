<?php
	ini_set('display_errors',1); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE); 
	include_once('logic_scripts/database.php');
	$db = dbConnect();
	$sql = "SELECT * FROM about";
	$selectResult = mysqli_query($db, $sql)or die(mysqli_error($db));
	if($row= mysqli_fetch_assoc($selectResult))
	{
		$title = $row['TITLE'];
		$message = $row['CONTENT'];
	}
	include_once("html/header.html");
?>
		<!-- SPLASH -->
		<div id="landing-splash-nav" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<div class="text-center">
				<h1 class="splash-h-2">About Us</h1>
			</div>
		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container full text-center">
			<div class="container ninety buffer">

				<div class="col-md-12 f-panel-1">
						
						<?php echo "<h3 style='text-align:center;'>". $title ."</h3> <br>";
						echo $message;  ?>

				</div>

			
			</div>

		</div>

		<!-- CONTENT BLOCK 2 -->
		<div class="container full text-center alt-colour">
			<div class="col-md-12 buffer">


			</div>
		</div>
<?php
		include_once("html/footer.html");
?>