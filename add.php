<?php

include('connection.php');

?>

<html>
<head>

<title>
Add User</title></head>
	<body>
	  <form method="POST" action="reg.php">
	  	First Name:<br>
	  	<input type="text" name="firstname" required>
	  	<br>

	  	Last Name:<br>
	  	<input type="text" name="lastname" required>

	  	User Name:<br>
	  	<input type="text" name="username" required>

	  	Password:<br>
	  	<input type="password" name="password" required>

	  	<br><br>
	  	<input type="submit" value="Submit" required>
	  </form>
	</body>
</html>
