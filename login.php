<?php

	session_start();
 
	require_once('connection.php');

	if($username == 'mainAdmin' && $password =='mainAdmin')
	{
			$_SESSION['SESS_ID'] = 'mainAdmin';
			$_SESSION['SESS_USERNAME'] = 'mainAdmin';
			$_SESSION['SESS_PASSWORD'] = 'mainAdmin';
		header("location: add.php");
		exit();
	}

$query= "SELECT * FROM user WHERE username = '$username' AND password= '$password'";
$results= $db->query($query);

if ($results){
	if(myquery_num_rows($results) > 0){
		session_regenerate_id();
		$check = myquery_fetch_assoc($results);
		$_SESSIION['SESS_ID'] = $check['id'];
		$_SESSION['SESS_USERNAME'] = $check['username'];
		session_write_close();
		header("Location: add.php");
		die();
	}else{
		header("Location: index.html");
		die();
	}
}else{
	die("Query Failed");
}				

?>