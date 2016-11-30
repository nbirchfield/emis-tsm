<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	echo "in validate: $username  \n";
	echo "in validate: $password  \n";

	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysqli_affected_rows($username);
	$password = mysqli_real_escape_string($password);
	
	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");
	#echo "$con";

		
	$results = 0;	
	//Query the database for user
	if($results = mysqli_query($con,"select * from EmployeeTable")) {
        echo mysqli_fetch_array($results);
    } else {
		echo mysqli_errno($con);
	}
	mysqli_free_result($results);
	echo "here";

	//echo "results:  $results";
	return $results;
?>
