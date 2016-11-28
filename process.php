<html>
<head>
<title>Connecting to MySQL Server</title>
</head>
<body>
<?php
echo "in php right now";
   $dbhost = 'localhost';
   $dbuser = 'group4';
   $dbpass = 'Group4@TSM';
   $database = 'group4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysqli_close($conn);
?>
</body>
</html
