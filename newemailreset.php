<!--This will send the reset email link to requester's provided email-->
<?php
	require 'vendor/autoload.php';
	require 'host_user_pass.php';
	
	# get values passed from form in resetpassword.php file
	$email = htmlspecialchars($_POST['email']);
	$type = $_POST['type'];

	# prevent mysql injection
	$email = stripcslashes($email);
	
	# Instantiate the mail object and assign properties
	$mail = new PHPMailer();
	$mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.mailgun.org';
        $mail->Username = $host_user;
        $mail->Password = $host_pass;
        $mail->From = 'emis.utsa@gmail.com';
        $mail->FromName = 'johnny';
        $mail->Subject = 'Password Reset';
        $mail->Body = 'Click the following link to reset your account password.
		       http://galadriel.cs.utsa.edu/~group4/resetpassword.php?email=' . $email . '';
	$mail->AddAddress($email, "User");
	
	# connect to the server and select database
	$con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

	# determine the type of user employee/patient and assigne appropriate table
	$table = $type == 'employee' ? 'EmployeeTable' : 'PatientTableNew';

	# create sql statement. checks if email is in the employee/patient table
	$verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN Email = ? THEN 1 ELSE 0 END) from $table");
	mysqli_stmt_bind_param($verifystmt, 's', $email);

	# Execute the query, assign the result, and close the statment
	if(mysqli_stmt_execute($verifystmt)) {
		mysqli_stmt_bind_result($verifystmt, $results);
		mysqli_stmt_fetch($verifystmt);
		mysqli_stmt_close($verifystmt);
	}
	echo "$email";
	# if the email is in the database, send an email to the recipient with reset link
	if($results == 1) {
		mysqli_free_result($verifystmt);
		echo "before send";
		# send email or return error
		if(!$mail->Send()) {
			mysqli_close($con);
			echo "send error: " . $mail->ErrorInfo;
		} else {
			mysqli_close($con);
			header("Location: http://galadriel.cs.utsa.edu/~group4");
			exit;
		}  
	} else {
		echo "sql error: " . mysqli_errno($con);
	}
?>
