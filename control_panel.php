<?php include_once("logic_scripts/adminControlPanel.php");
	  include_once("html/header.html"); ?>
	  <!-- SPLASH -->
		<div id="landing-splash" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<p class="splash-text">Welcome to Admin Control Panel</p>
			<p class="splash-text-2"></p>
			<form action="logic_scripts/adminControlPanel.php" method="post" style="text-align: center;">
				<h4><b>Logout?</b></h4>
				<input type="submit" name="submit" value="Logout!">
			</form>
		</div>
		
		<div class="container full text-center">
			<div class="container ninety buffer">
				<div class="col-md-3 f-panel-1">
					<h3>Upload the game file</h3>
					<h4><b>Change the file </b></h4>
					<a href="file_upload.php" class="btn btn-default panel-btn seventy">Upload</a>
				</div>
				<div class="col-md-3 f-panel-2">
					<h3>Change About Us</h3>
					<h4><b>Change about us</b></h4>
					<a href="about_us_change.php" class="btn btn-default panel-btn seventy">Change About Us</a>
				</div>
				<div class="col-md-3 f-panel-1">
					<h3>Upload Blog Post</h3>
					<h4><b>Upload a new blog post</b></h4>
					<a href="blog_upl.php" class="btn btn-default panel-btn seventy">Upload Post</a>
				</div>
				<div class="col-md-3 f-panel-2">
					<h3>Delete Blog Post</h3>
					<h4><b>Delete a blog post</b></h4>
					<a href="blog_del.php" class="btn btn-default panel-btn seventy">Delete Post</a>
				</div>
			</div>

		</div>

<?php include_once("html/footer.html");



