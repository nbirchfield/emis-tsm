<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
<<<<<<< HEAD
=======
<<<<<<< HEAD

	//$password = $_POST['password'];

=======
//	$password = $_POST['password'];
>>>>>>> c03e28de7143d7c166f8ce4db7c60c3071e12664
>>>>>>> a32ba387f38f722490aff2d7985a6a8d86e1ad0e
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	//prevent mysq; injection
	$username = stripcslashes($username);
<<<<<<< HEAD
	$firstname = stripcslashes($firstname);
	$lastname = stripcslashes($lastname);	
	$email = stripcslashes($email);
	
=======
<<<<<<< HEAD
	#switching to a default password. will implent change password later
	//$password = stripcslashes($password);

=======
//	$password = stripcslashes($password);
>>>>>>> c03e28de7143d7c166f8ce4db7c60c3071e12664
	$firstname = stripcslashes($firstname);
	$lastname = stripcslashes($lastname);	
	$email = stripcslashes($email);

>>>>>>> a32ba387f38f722490aff2d7985a6a8d86e1ad0e
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
		mysqli_free_result($results);
<<<<<<< HEAD
		$addstmt = mysqli_prepare($con, "INSERT INTO PatientTableNew VALUES(?,?,?,?,?)");
		mysqli_stmt_bind_param($addstmt, 'sssss', $firstname,$lastname,$username,$password,$email);
<<<<<<< HEAD
		if(mysqli_stmt_execute($addstmt)){
			mysqli_stmt_fetch($addstmt);
			mysqli_stmt_close($addstmt);
		}

			//can add a query to grab a default from database or just use a hardcoded one but this should work
			$msg = "Automatically generated message. Do not reply.\nYour temporary password is: ChangeMe\n";
			$msg = wordwrap($msg, 70);

			mail("kingkongn64@hotmail.com", "Automated message", $msg);

			mysqli_close($con);

			header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
=======
//		mysqli_stmt_execute($addstmt));
		echo "I GOT HERE\n";
		echo "$firstname,$lastname,$username,$password,$email";
=======
		$addstmt = mysqli_prepare($con, "INSERT INTO PatientTableNew VALUES(?,?,?,'Temppass9',?,'0')");
		mysqli_stmt_bind_param($addstmt, 'ssss', $firstname,$lastname,$username,$email);
>>>>>>> c03e28de7143d7c166f8ce4db7c60c3071e12664
		if(mysqli_stmt_execute($addstmt)){
			mysqli_stmt_fetch($addstmt);
			mysqli_stmt_close($addstmt);
        	}
		mysqli_close($con);
<<<<<<< HEAD
//			header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
>>>>>>> 5a01173f2f32a4ebc74babf049b7cecb37ff3eba
			exit;
=======
		header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
		exit;
>>>>>>> c03e28de7143d7c166f8ce4db7c60c3071e12664
        }
        else {
		echo mysqli_errno($con);	
}
	mysqli_close($con);
	echo "Account Name Already In Use\n";
?>
