<?php
	session_start();
//	$server = $_SERVER["DOCUMENT_ROOT"] . "/resources/php/Main.php"
	$server = "resources/php/general.php"
	include($server);
	$message = login_start(); // Gets login procedure, and also returns value that comes out of login function
	start("Login", "none", 0);
	general.head();
?>

<?php general.title(); ?>

<?php general.nav_login(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-3">
		<h1> Login </h1>
		<form id="Download1" action="Login.php" method="post">
			Username: <input id="Download_Code" type="text" name="username" value="">  </br></br>
			Password: <input id="Download_Code" type="password" name="password" value=""> </br></br>
			<input id="Download_File" type="submit" name="submit" value="Login">
		</form>
	</div>
	<div class="col-xs-3">
		<p></br><?php echo $message ?></p>
	</div>
</div>
</div>

<?php general.footer(); ?>

</body>
</html>