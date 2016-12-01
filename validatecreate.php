<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	//prevent mysq; injection
	$username = stripcslashes($username);
	$firstname = stripcslashes($firstname);
	$lastname = stripcslashes($lastname);
	$email = stripcslashes($email);

	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN Username = ? THEN 1 ELSE 0 END) from PatientTableNew");
	mysqli_stmt_bind_param($verifystmt, 's', $username);

	//Query the database for user
	if(mysqli_stmt_execute($verifystmt)) {
		mysqli_stmt_bind_result($verifystmt, $results);
		mysqli_stmt_fetch($verifystmt);
		mysqli_stmt_close($verifystmt);
	}
	if($results == 0) {
		mysqli_free_result($verifystmt);
		$addstmt = mysqli_prepare($con, "INSERT INTO PatientTableNew VALUES(?,?,?,'Temppass9',?, 0)");
		mysqli_stmt_bind_param($addstmt, 'ssss', $firstname, $lastname, $username, $email);

		if (mysqli_stmt_execute($addstmt)) {
			mysqli_stmt_fetch($addstmt);
			mysqli_stmt_close($addstmt);
		}

		//can add a query to grab a default from database or just use a hardcoded one but this should work
		$msg = "Automatically generated message. Do not reply.\nYour temporary password is: Temppass9\n";
		$msg = wordwrap($msg, 70);

		mail("kingkongn64@hotmail.com", "Automated message", $msg);

		mysqli_close($con);

		header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
		exit;
	} else {
		echo mysqli_errno($con);
	}
	mysqli_close($con);
	echo "Account Name Already In Use\n";
?>
