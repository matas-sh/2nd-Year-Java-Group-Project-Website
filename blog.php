<?php include_once("html/header.html");
	  include_once("logic_scripts/blog.php"); 
?>

		<!-- SPLASH -->
		<div id="landing-splash-nav" class="buffer">
			<img class="full" src="uploads/home.jpg">
			<div class="text-center">
				<h1 class="splash-h-2">Blog</h1>
			</div>
		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container full text-center">
			<div class="container ninety buffer">

						
						<?php $i= sizeof($name);
							  $a = 0;
							  while($a!=$i)
							  {
								 echo"<div class=\"container full text-center\" style=\"margin-top: 0;\">
											<div class=\"container ninety buffer\">
												<div class=\"col-md-12 f-panel-1\">
													<h2>".$name[$a]."</h2>
													<p>".$description[$a]."</p>
													<h3>".$date[$a]."</h3>
												</div>
											</div>
										</div>";
								$a+=1;
							  }
						?>

			
			</div>

		</div>

<?php 
	include_once("html/footer.html");
?>
