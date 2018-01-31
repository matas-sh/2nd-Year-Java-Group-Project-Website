<?php
	generatepassword();
	function generatepassword()
	{
		$pwd = "tris";
		$try = hash('sha512', $pwd);
		echo $try;
	}
?>