<!--Validates account creation--> 
<?php
	require 'vendor/autoload.php';
	require 'host_user_pass.php';

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
	$mail->Subject = 'Emis Account Creation.';
	$mail->Body = 'Account successfully created.';
	
	$address = "kingkongn64@hotmail.com";
	$mail->AddAddress($address, "myself");

	# get values passed and assign to variables
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];

	if(empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($question) || empty($answer)){
		header("Location: newaccount.php?error=empty");
		exit();
    } else{

        # prevent mysql injection
        $username = stripcslashes($username);
        $firstname = stripcslashes($firstname);
        $lastname = stripcslashes($lastname);
        $email = stripcslashes($email);
        $question = stripcslashes($question);
        $answer = stripcslashes($answer);

        # connect to the server and select database
        $con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

        # create sql query and bind parameters
        $verifystmt = mysqli_prepare($con, "select SUM(CASE WHEN Username = ? THEN 1 ELSE 0 END) from PatientTableNew");
        mysqli_stmt_bind_param($verifystmt, 's', $username);

        # Query the database to see if user exist
        if(mysqli_stmt_execute($verifystmt)) {
            mysqli_stmt_bind_result($verifystmt, $results);
            mysqli_stmt_fetch($verifystmt);
            mysqli_stmt_close($verifystmt);
        }
        #if user is in database, add user with provided info
        if($results == 0) {
            mysqli_free_result($verifystmt);
            $addstmt = mysqli_prepare($con, "INSERT INTO PatientTableNew VALUES(?,?,?,'Temppass9',?, 0, ?, ?)");
            mysqli_stmt_bind_param($addstmt, 'ssssss', $firstname, $lastname, $username, $email, $question, $answer);

            if (mysqli_stmt_execute($addstmt)) {
                mysqli_stmt_fetch($addstmt);
                mysqli_stmt_close($addstmt);
            } else {
                echo "sql error: ". mysqli_error($con);
                exit;
            }
            # send mail to confirm account creation and continue to account home page
            if(!$mail->Send()) {
                echo  "message error: " . $mail->ErrorInfo;
            } else {
                mysqli_close($con);
                header("Location: http://galadriel.cs.utsa.edu/~group4/landingpage.php");
                exit;
            }
            } else {
            mysqli_close($con);
        }
        header("Location: newaccount.php?error=inUse");
    }
?>
