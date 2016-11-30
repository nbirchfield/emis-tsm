<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];

	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysqli_affected_rows($username);
	$password = mysqli_real_escape_string($password);
	
	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$stmt = mysqli_prepare($con, "select count(*) from EmployeeTable where username = ? and password = ?");
	mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

	echo "before execute: $username<br />$password<br />";

	//Query the database for user
	if(mysqli_stmt_execute($stmt)) {
		echo "in query<br />";
		mysqli_stmt_bind_result($stmt, $results);
		mysqli_stmt_fetch($stmt);
		echo "result: $results<br />";
		mysqli_stmt_close($stmt);
        //echo "$row[0]<br />";
        //if($row[0] == 1) {
		//	header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php?username=".urlencode("$username"));
		//	exit;
        //}
    } else {
		echo mysqli_errno($con);
	}
	mysqli_close($con);
	echo "dammit didnt work\n";
?>
