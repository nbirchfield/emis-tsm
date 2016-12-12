<html>
	<head>
        <title> Unlock Account</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 > Unlock Account</h1>
<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=incorrect') ){
		echo "<font color='red'>Incorrect password or username!!!</font>";
	}
?>
			<form action="unlock.php" method="post">
				<div class="username">
					<input type="text" name="username" placeholder = "Username">  
				</div>   
              
				<div class="password">
					<input maxlength="12" type="password" name="password" placeholder ="Password">
				</div>   
              
				<input type="submit" name="submit" value="Unlock" class="btn-login">
              
			</form> 
            
			<a href="resetpassword.php">Help, I forgot my password</a><br>
           
		    	<a href="index.php">Back</a> 
			
		</div>
    </body>
</html>
