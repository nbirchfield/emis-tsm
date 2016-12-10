<html>
	<head>
        <title> Create account</title>

		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 > Create Account</h1>
<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') ){
		echo "<font color='red'>Fill out all fields!!!</font>";
	}	
	if(strpos($url, 'error=inUse') ){
		echo "<font color='red'>Username already in use!!!</font>";
		
	}
?>

			<form action="validatecreate_new.php" method="post">
				
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

                                <div class="question">
					<input type="text" name="question" placeholder = "Security Question">
				</div>

                                <div class="answer">
					<input type="text" name="answer" placeholder = "Security Answer">
				</div>

				<input type="submit" name="submit" value="Create" class="btn-login">
              
			</form> 
           
		    <a href="index.php">Back</a> 
		
		</div>
    </body>
</html>
