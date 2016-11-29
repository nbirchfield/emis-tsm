<!DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <div id="header" style="background-color:#003380;color:white;padding:10px;">
       <h1> Group4 EMIS Login </h1>
            <p>login page</p>
   </div>

</head>
    <body>
        <div id="frm">
            <form action="process.php" medthods="POST">
			<p>
				<select name=>
					<option value="employee">Employee</option>
					<option value="patient">Patient</option>
				</select>		</p>
                <p>
                    <label>Username:</label>
                    <input type="text"  id="user"/>
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass" />
                </p>
                <p>
                    <input type="submit" id="btn" value="Login"/>
                </p>
                <form action = "newaccount.php">
                    <p>
                        <input type="submit" id="ctr" value="Create Account">
                    </p>
                </form>
        </div>
    </body>
</html>
