<!DOCTYPE html>
<html>
<head>
	<title> Login Page </title>
	<h1> Group4 EMIS Login </h1>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div id="frm"> 
   	<form action="process.php" medthods="POST">
		<p>
			<label>Username:</label>
			<input type="text" id="user" / >
		</p>

			<label>Password:<label>
			<input type="password" id="pass" name="pass" />
		</p>
		<p>
			<input type="submit" id="btn" value="Login" />
		</p>
	</form>
   </div>
   <?php
      $host = "localhost";
      $user = "group4";
      $password = "Group4@TSM";
      $con = mysql_connect($_SERVER);
 
     echo 'tedt';
  //   if(!  $con)
  //    {
  //        die('cant connect'. mysql_error());
  //    }
    echo 'hello';
 ?>
</body>
</html>
