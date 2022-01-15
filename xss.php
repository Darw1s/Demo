<!DOCTYPE html>
<html>
<head>
   <title>XSS 1</title>
</head>
<body>
	
	 <div style="background-color:#c9c9c9;padding:15px;">
    </div>
<div align="center">
   <form method="GET" action="" name="form">
   <p>Your name:<input type="text" name="username"></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php
if(isset($_GET["username"]))

	echo("Your name is ".$_GET["username"])?>
</body>
</html>
