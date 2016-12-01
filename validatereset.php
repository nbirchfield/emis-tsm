<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST('password'];

	$answer = $_POST['answer'];

	//prevent mysq; injection
	$username = stripcslashes($username);
	$answer = stripcslashes($answer);
	$password = stripcslashes($password);
	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	$verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN Username = ? THEN 1 ELSE 0 END), SUM(CASE WHEN Answer = ? THEN 1 ELSE 0 END) from PatientTableNew");
	mysqli_stmt_bind_param($verifystmt, 'ss', $username, $answer);

	//Query the database for user
	if(mysqli_stmt_execute($verifystmt)) {
		mysqli_stmt_bind_result($verifystmt, $results, $answer);
		mysqli_stmt_fetch($verifystmt);
		mysqli_stmt_close($verifystmt);
	}
	if($results == 1 && $answer == 1) {
		echo 'I GOT HERE FIRST';
		mysqli_free_result($verifystmt);
		$addstmt = mysqli_prepare($con, "UPDATE INTO PatientTableNew SET Answer = ? WHERE Username = ?");
		mysqli_stmt_bind_param($addstmt, 'ss', $answer, $username);

		if (mysqli_stmt_execute($addstmt)) {
			mysqli_stmt_fetch($addstmt);
			mysqli_stmt_close($addstmt);
		}

		//can add a query to grab a default from database or just use a hardcoded one but this should work
		//$msg = "Automatically generated message. Do not reply.\nYour temporary password is: Temppass9\n";
		//$msg = wordwrap($msg, 70);

		//if(mail("kingkongn64@hotmail.com, nbirchfield64@gmail.com, yks374@my.utsa.edu", "Automated message", $msg)) {
           // echo "mail delivered successfully";
            mysqli_close($con);
//            header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
	    echo 'I GOT HERE';  
          exit;
       // } else {
         //   mysqli_close($con);
           // echo "email not sent";
           // exit;
//        }
		//header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
	} else {
		echo mysqli_errno($con);
	}
	mysqli_close($con);
	echo "Account Name Already In Use\n";
?>
