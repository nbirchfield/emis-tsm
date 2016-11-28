<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	//connect to the server and select database
	mysql_connect("localhost", "group4", "Group4@TSM");
	mysql_select_db("group4");

	//Query the database for user
	$results = mysql_query("select * from EmployeeTable where username = '$username' and password = '$password'")
			or die("failed to query database " .mysql_error());
	echo"$results"
?>
