<!DOCTYPE html>
<html>
	<head>
	<title>Create Message</title>
	<link rel=stylesheet type="taxt/css" href="login.css">
	<script src="lib/jquery-1.11.1.js"></script>
	<script src=""></script>
	</head>

	<body style= "text-align:center;">
	<h1>Add User</h1>
		<form id="loginfo" action="adduser.php" method="post">

		<p><strong> FirstName: </strong><input type="text" id="firstname" class="textfield" required></p>

		<p><strong> LastName: </strong><input type="text" id="lastname" class="textfield" required></p>

		<p><strong> UserName: </strong><input type="text" id="username" class="textfield" required></p>

		<p><strong> Password: </strong><input type="text" id="password" class="textfield" required></p>

		<p><input type="submit id="submit" value="Submit"></p>

		</form>

			<a href = "logout.php"><input type="button" value="LOGOUT"></a>

	</body>
</html>