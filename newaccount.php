<html>
	<head>
        <title> Log In</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 > Login</h1>
			<form action="valaccount.php" method="post">
				<div class="firstname">
					<input type="text" name="firstname" placeholder = "Firstname">  
				</div>  
				<div class="lastname">
					<input type="text" name="lastname" placeholder = "Lastname">  
				</div>  
				<div class="username">
					<input type="text" name="username" placeholder = "Username">  
				</div>   
              
				<div class="password">
					<input maxlength="12" type="password" name="password" placeholder ="Password">
				</div>   
              
				<input type="submit" name="submit" value="Sign In" class="btn-login">
              
			</form> 
            
			<a href="">Help, i forgot my password</a><br>
           
		    <a href="newaccount.php">Sign Up</a> 
		
		</div>
    </body>
</html>
