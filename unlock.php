<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	//Remove these because messing up variables can add something later
	//$username = mysqli_affected_rows($username);
	//$password = mysqli_real_escape_string($password);
	
	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$stmt = mysqli_prepare($con, "select SUM(CASE WHEN Username = ? AND Password = ? THEN 1 ELSE 0 END) from EmployeeTable");
	mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
	$stmt3 = mysqli_prepare($con, "UPDATE EmployeeTable SET FailedAttempts = 0");
	
	//Query the database for user
	if(mysqli_stmt_execute($stmt)) {
		mysqli_stmt_bind_result($stmt, $results);
		mysqli_stmt_fetch($stmt);
		mysqli_stmt_close($stmt);
        }
	if($results == 1) {
		mysqli_stmt_execute($stmt3);	
		mysqli_stmt_fetch($stmt3);	
        	mysqli_close($con);
		//echo "Account Successfully Unlocked!";
		header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
		mysqli_free_result($results);
		exit;
        }
	else{
		echo mysqli_errno($con);    
	}
	mysqli_close($con);
	header("Location: unlockaccount.php?error=incorrect");
?>
