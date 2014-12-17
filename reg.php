<?php

session_start();

include('connection.php');


$fname=$_POST['firstname'];

$lname=$_POST['lastname'];

$username=$_POST['username'];

$password=$_POST['password'];

mysql_query("INSERT INTO user (firstname, lastname, password, username)VALUES('$fname', '$lname', '$password', '$username')");

header("location: add.php");

mysql_close($con);

?>