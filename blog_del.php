<?php include_once("html/header.html");
	  include_once("logic_scripts/blog_del.php");
?>
	<div id="landing-splash" class="buffer">
			<img class="full" src="uploads/home.jpg">
				<div class="text-center">
					<h1 class="splash-h-2">Delete Post</h1>
				</div>

		</div>
		<!-- CONTENT BLOCK 1 -->
		<div class="container text-center">
	      <div class="container1">
	<form method ="post" action = "blog_del.php" >
		<p> Which post do you want to delete:</p><br>
		<select name ="postName"> ";
		<?php foreach($name_array as $value)
		{
			echo " <option value='".$value."'> ".$value." </option>";
		}
		?>
		</select>
		<br>
		<br>
		<input type="submit" value="delete" name="delete"/>
		</div>
			
		</div>
		<br><br>
	</div>
	</form>
<?php 
	include_once("html/footer.html");
?>