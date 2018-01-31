<?php ob_start();
		include_once("html/header.html");?>
		<!-- SPLASH -->
		<div id="landing-splash-nav" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<div class="text-center">
				<h1 class="splash-h-2">Want to find out more?</h1>
			</div>
		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container text-center">
			<div class="container1">
			<h2>Send an e-mail to us!</h2>
				<form action="../logic_scripts/contact_us.php" method="POST">

				<label for="fname">Name:</label>
				<input type="text" id="fname" name="name" placeholder="Your name.." maxlength="50" size="30" autocomplete="on" required>

				<label for="lname">E-mail:</label>
				<input type="email"  name="email" placeholder="someone@example.com.." maxlength="80" size="30"  autocomplete="on" required>
				
				<label for="subject">Comment</label>
				<textarea id="subject" name="message" placeholder="Write something.." style="height:200px" required></textarea>

				<input type="submit" name="Send" value="Submit">
				</form>
			</div>
		<br><br>
		</div>
	
		<div class="container full text-center alt-colour">
			<div class="col-md-12 buffer">
				<br><br>
				<h3 class="central" style="color: #333332"><b>
				
				</b></h3>
			</div>
		</div>

		<?php include_once("html/footer.html");?>