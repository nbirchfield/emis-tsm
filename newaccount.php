<html>
	<head>
        <title> Create account</title>

		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 > Create Account</h1>
			<form action="validatecreate.php" method="post">
				
                <div class="firstname">
					<input type="text" name="firstname" placeholder = "Firstname">  
				</div>   

				<div class="lastname">
					<input type="text" name="lastname" placeholder = "Lastname">  
				</div>   

				<div class="username">
					<input type="text" name="username" placeholder = "Username">  
				</div>   

				<div class="email">
					<input type="text" name="email" placeholder = "Email">
				</div>
              
				<input type="submit" name="submit" value="Create" class="btn-login">
              
			</form> 
           
		    <a href="index.php">Back</a> 
		
		</div>
    </body>
</html>
