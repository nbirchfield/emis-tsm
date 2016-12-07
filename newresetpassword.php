<!-- This is the new resetpassword to email the account that needs to be resetted-->


<html>
	<head>
        <title>Reset</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 >Reset Password</h1>
			<form action="newemailreset.php" method="post">
       				Provide an email so we can send you information of you're acount <br>
		
		<div class="dropdown" >
			<select name="type">
			    <option>employee</option>
			    <option>patient</option>
			</select>
		</div>	       
				<input type="text" name="email" placeholder ="Email">
              
				<input type="submit" name="submit" value="Reset" class="btn-login">
              
			</form> 
            
		    <a href="index.php">Back</a> 
		
		</div>
    </body>
</html>
