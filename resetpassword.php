<html>
	<head>
        <title>Reset</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 >Reset Password</h1>
			<form action="validatereset.php" method="post">
              
				<input type="text" name="username" placeholder ="User Name">
				<input type="text" name="securityquestion" placeholder ="Security Question Answer">
				<input maxlength="12" type="password" name="newpassword" placeholder ="New Password">
              
				<input type="submit" name="submit" value="Reset" class="btn-login">
              
			</form> 
            
		    <a href="index.php">Back</a> 
		
		</div>
    </body>
</html>
