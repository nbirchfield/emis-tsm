<?php
	//get values passed from form in login.php file
	$username = $_POST['username'];
	$password = $_POST['password'];

	//prevent mysq; injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	#connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

        $query = sprintf("SELECT username from EmployeeTable WHERE username = '%s'",
                          $username);

        $result = mysqli_query($con, $query);

        if(! $result) {
           $message = 'invalid query: '. mysqli_error(). "\n";
           $message .= 'Whole query: ' . $query;
           die($message); 
        }

       $row = mysqli_fetch_assoc($result);
       if($row['username'] == $username){
         echo "Username already exists";

       }
       else{

          $query2 = sprintf("INSERT INTO PatientTable (name, username, password) VALUES( 'test',  'attempt',  'im a password')");
         
          $result2 = mysqli_query($con, $query2);

           if(! $result2) {
           $message2 = 'invalid query: '. mysqli_error(). "\n";
           $message2 .= 'Whole query: ' . $query2;
           die($message2);
	   }
          
       }

	mysqli_free_result($results);
	mysqli_close($con);
//	echo "dammit didnt work\n";
?>
