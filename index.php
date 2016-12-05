<?php require 'vendor/autoload.php';
    use Mailgun\Mailgun;
    $mailgun = new Mailgun\('api_key', new \Http\Adapter\Guzzle6\Client());
?>
<html>
	<head>
	<style>

		select[name="type"]{
			border-color:rgba(0,0,0,.3);
			border-radius: 5px;
    			height:25px;
    			width: 100px;
   			background-color: rgb(220,220,220);
    			color:white;
   			font-family:Oswald;
    			font-size:14px;
		}		

		select[name="type"]:hover{
			background-color: red;
		}
	</style>

        <title> Log In</title>
		<link rel="stylesheet" type="text/css" href="new_style.css">
	</head>
	
    <body>
        <div class="container">
			<h1 > Login</h1>
			<form action="validatetest.php" method="post">

                <div class="dropdown" >
                    <select name="type">
                        <option>employee</option>
                        <option>patient</option>
                    </select>
                </div>

				<div class="username">
					<input type="text" name="username" placeholder = "Username">  
				</div>   
              
				<div class="password">
					<input maxlength="12" type="password" name="password" placeholder ="Password">
				</div>   
              
				<input type="submit" name="submit" value="Sign In" class="btn-login">
              
			</form> 
            
			<a href="resetpassword.php">Help, I forgot my password</a><br>
           
		    	<a href="newaccount.php">Sign Up</a><br> 
		
		    	<a href="unlockaccount.php">Unlock Account</a> 
			
		</div>
    </body>
</html>
