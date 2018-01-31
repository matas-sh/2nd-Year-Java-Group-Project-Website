
<?php include_once("html/header.html");
	  include_once("logic_scripts/blog_upl.php");
?>
	<!-- SPLASH -->
		<div id="landing-splash-nav" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<div class="text-center">
				<h1 class="splash-h-2">Upload blogpost</h1>
			</div>
		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container full text-center">
			<div class="container ninety buffer">
				<div class="col-md-12 f-panel-1">
					<form method="post" action ="logic_scripts/blog_upl.php" enctype="multipart/form-data">
						<p>Name of blog post:</p>
						<input type="name" name="name" value="" size="30" required /><br>
						<p>Description:</p>
						<textarea name="description" rows="7" cols="30" placeholder="enter the description of the piece.." required ></textarea><br>
						<p>Date:</p>
						<input type="t" name="date"  value="" size="10" placeholder="DD-MM-YYYY" required /><br>
						<br><br>
						<input type="submit" name="upload" value="Post!"/>
					</form>
				</div>
			</div>
		</div>
		<!-- CONTENT BLOCK 2 -->
		<div class="container full text-center alt-colour">
			<div class="col-md-12 buffer">
			</div>
		</div>
<?php
	include_once("html/header.html");
?>