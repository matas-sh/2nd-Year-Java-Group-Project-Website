<?php include_once("html/header.html");
?><div id="landing-splash" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<h1 class="splash-h">Admin Login</h1>

		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container text-center">
	      <div class="container1">
			
				<form method="post" action="logic_scripts/adminLogin.php">
					</p> Username:</p>
					<input name="username" type="username" value="" required>
					<p> Password:</p>
					<input name="password" type="password" value="" required>
					<br><br>
					<input name="submit" type="submit" value="Login!">
					</form>					
			</div>
			
		</div>
		<br><br>
	</div>

<?php include_once("logic_scripts/adminLogin.php");
	  include_once("html/footer.html"); ?>