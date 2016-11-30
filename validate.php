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
			echo "$row[0]<br />";
            echo "$row[1]<br />";
            echo "$row[2]<br />";
            echo "$row[3]<br />";
            echo "$row[4]<br />";
            echo "$row[5]<br />";

        }
    } else {
		echo mysqli_errno($con);
	}
	mysqli_free_result($results);
	mysqli_close($con);
	echo "here\n";
?>
