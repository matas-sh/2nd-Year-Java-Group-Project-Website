<?php include_once("html/header.html");
	  include_once("logic_scripts/about_us_change.php");
?>
<!-- SPLASH -->
		<div id="landing-splash-nav" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<div class="text-center">
				<h1 class="splash-h-2">Change About Us</h1>
			</div>
		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container full text-center">
			<div class="container ninety buffer">

				<div class="col-md-12 f-panel-1">
					<form action="logic_scripts/about_us_change.php" method="post">
						<h3>Title</h3>
						<input type="name" name="title" value="" size="30"/><br>
						
						<h3>Content</h3>
						<textarea name="description" rows="7" cols="30" placeholder="enter the description of the piece.."></textarea><br>
						
						<input type="submit" name="change" value="Change"/>
					</form>
				</div>

			</div>

		</div>

		<!-- CONTENT BLOCK 2 -->
		<div class="container full text-center alt-colour">
			<div class="col-md-12 buffer">


			</div>
		</div>
<?php include_once("html/footer.html")?>