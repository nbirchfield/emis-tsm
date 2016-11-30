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
	$stmt = mysqli_prepare("select count(*) from EmployeeTable where username = ? and password = ?");
	$stmt ->bind_param("ss", $username, $password);
	//Query the database for user
	if($stmt->execute()) {
		echo "in query<br />";
		$stmt->bind_result($results);
		$stmt->fetch();
        $row = mysqli_fetch_array($results);
        echo "$row[0]<br />";
        //if($row[0] == 1) {
		//	header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php?username=".urlencode("$username"));
		//	exit;
        //}
    } else {
		echo mysqli_errno($con);
	}
	mysqli_free_result($results);
	mysqli_close($con);
	echo "dammit didnt work\n";
?>
