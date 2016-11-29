<html>
<head>
<title>Connecting to MySQL Server</title>
</head>
<body>
<?php

   $test = $_POST["last"];
   echo $test;

   $dbhost = 'localhost';
   $dbuser = 'group4';
   $dbpass = 'Group4@TSM';
   $database = 'group4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }

  // $test = $_POST["last"];
  // echo $test;
   mysqli_close($conn);
?>
</body>
</html
