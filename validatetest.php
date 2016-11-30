<?php
	//get values passed from form in login.php file
	$type = $_POST['type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//check for attempts
	$count = 0;
	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	//connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	//Store drop down result and select appropriate table for query
	$table = $type == 'employee' ? 'EmployeeTable' : 'PatientTableNew';

	//Returns 1 if the username and password are in database. also grabs number of login attempts
	$stmt = mysqli_prepare($con, "select SUM(CASE WHEN Username = ? AND Password = ? THEN 1 ELSE 0 END), FailedAttempts from $table where Username = ? and Password = ?");
	mysqli_stmt_bind_param($stmt, 'ssss', $username, $password, $username, $password);
	$stmt2 = mysqli_prepare($con, "UPDATE EmployeeTable SET FailedAttempts = FailedAttempts + 1");

	//Query the database for user
	if(mysqli_stmt_execute($stmt)) {
		mysqli_stmt_bind_result($stmt, $results, $attempts);
		mysqli_stmt_fetch($stmt);
		mysqli_stmt_close($stmt);
		//if user is in database and login credentials verified
        if($results == 1 && $attempts < 3) {
        	mysqli_close($con);

        	//employee destination
			if($type == 'employee')
				header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
			//patient destination
            else
				header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");

			mysqli_free_result($results);
			exit;
        }
    }

	if($attempts >=3){
		echo "You have tried too many login attempts! Please Unlock Account";
		exit;
	}

	//incorrect username and/or password
	if($results == 0 && $attempts<3) {
		mysqli_free_result($results);
		mysqli_stmt_execute($stmt2);
		mysqli_stmt_fetch($stmt2);
	}
	mysqli_close($con);
	echo "Invalid Username/Password\n";
?>
