<!DOCTYPE html>

<html>
<head>

	<title> Create Account </title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<div id="header" style="background-color:#003380;color:white;padding:20px;">
	  <h1> Group4 EMIS Login </h1>
  		<p>Create Account</p>
	</div>
	
</head>
<body> 
	<div id="frm">
 
		<form action= "processaccount.php" medthods="POST">
				<p>
					<label>Last Name:<label>
						<input type="text" id="last" />
					</p><p>

					<label>First Name:</label>
					<input type="text" id="firstname" / >
				</p>
				<p>
					<label>Username:<label>
						<input type="text" id="username"  />
					</p>
                                <p>
					<label>User Email:<label>
						<input type="text"  id="email" />
					</p>
				<p>
					<label>Password:<label>
						<input type="text" id="pass" />
					</p>
                                <p>
					<label>Date of Birth:<label>
						<input type="text" id="dob"  />
					</p>
                                <p>
						<input type="submit" id="ctr" value="Create Account"> 
				</p>
                                
		</form>
                               <form action = "index.php">
                                     <p align = "right">
                                                <input type = "submit" id="back" value="Back">
                                     </p>
                              </form>                 
	</div>
</body>

</html>
