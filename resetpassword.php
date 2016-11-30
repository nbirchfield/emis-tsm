<html>
	<head>
        <title>Reset</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 >Reset Password</h1>
			<form action="validate.php" method="post">
				<div class="username">
					<input type="text" name="username" placeholder = "Username">  
				</div>   
              
				<div class="email">
					<input type="text" name="email" placeholder ="Email">
				</div>   
				
				<div class="password">
					<input maxlength="12" type="password" name="password" placeholder ="New Password">
				</div>   
              
				<input type="submit" name="submit" value="Reset" class="btn-login">
              
			</form> 
            
		    <a href="index.php">Back</a> 
		
		</div>
    </body>
</html>
