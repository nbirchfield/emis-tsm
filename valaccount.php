<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname= $_POST['lastname'];	

	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysqli_affected_rows($username);
	$password = mysqli_real_escape_string($password);
	
	//connect to the server and select database
//	mysqli_connect("localhost", "group4", "Group4@TSM");
//	mysqli_select_db("group4");


        $dbhost = 'localhost';
        $dbuser = 'group4';
        $dbpass = 'Group4@TSM';
        $database = 'group4';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
        if(! $conn )
        {
        die "Could not connect: ' . mysqul_error())";
        }

        echo "Connected";
	//Query the database for user
//	$results = mysqli_query("select SUM(CASE WHEN Username = '$username' AND Password = '$password' THEN 1 ELSE 0) from EmployeeTable")
//			or die("failed to query database " .mysqli_error());
	

//	echo "results:  $results";
//	return $results;
?>