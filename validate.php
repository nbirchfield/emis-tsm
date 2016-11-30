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

	//Query the database for user
	if($results = mysqli_query($con,"select * from EmployeeTable")) {
        while($row = mysqli_fetch_array($results)) {
            foreach ($row as $column)
            	echo "before column<br />";
                echo "$column<br />";
        }
    } else {
		echo mysqli_errno($con);
	}
	mysqli_free_result($results);
	mysqli_close($con);
	echo "here\n";
?>
