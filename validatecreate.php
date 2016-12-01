<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$firstname = stripcslashes($firstname);
	$lastname = stripcslashes($lastname);	
	$email = stripcslashes($email);
	
//	if (!preg_match(hi, $password))
//		{
//  			echo "Password must be at least 8 characters long with at least one capital letter!\n";
//			exit;
//		}
	//Remove these because messing up variables can add something later
	//$username = mysqli_affected_rows($username);
	//$password = mysqli_real_escape_string($password);
	
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
		$addstmt = mysqli_prepare($con, "INSERT INTO PatientTableNew VALUES(?,?,?,?,?,'0')");
		mysqli_stmt_bind_param($addstmt, 'sssss', $firstname,$lastname,$username,$password,$email);
		if(mysqli_stmt_execute($addstmt)){
			mysqli_stmt_fetch($addstmt);
			mysqli_stmt_close($addstmt);
		
        	}
		mysqli_close($con)
			header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
			exit;
        }
        else {
		echo mysqli_errno($con);
	//	echo "Account Name Already In Use\n";	
}
	mysqli_close($con);
	echo "Account Name Already In Use\n";
?>
