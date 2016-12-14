<!DOCTYPE html>
<html>
<head>
        <title>LandingPage</title>
<style>
body {
    margin: 0;
        max-width: 100%;
        height: auto;
        width: auto;
        background-image: url("http://i.imgur.com/uO6RkYM.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

}

h1{
        font-family:Oswald;
    margin-bottom:0px;
    color: black ;
        text-align: center;
}

p {

    color: black;
    background-color: white;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: black;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover{
    background-color: #555;
    color: white;
}

.page{
        margin-left:25%;
        padding:1px 16px;
        height:99vh;
}
form{
	text-align: center;
	
}
.btn{
    font-family:Oswald;
    border-radius:5px;
    padding: 5px 55px;
    background-color: rgb(38,159,220);
    color:white;
    font-weight:bold;
    border-color:rgba(0,0,0,.3);
    font-size:16px;
}

.btn:hover{
        background-color:red;
}

.home{
	margin-top:70%;
}
</style>
</head>
<body>

<ul>
  <li><a class="home" href="landingpage.php">Home</a></li>
  <li><a href="">Calander</a></li>
  <li><a href="appointment.php">Appointment</a></li>
  <li><a href="">Medical History</a></li>
  <li><a href="">Messages</a></li>
  <li><a href="">Personal Info</a></li>
  <li><a href="">Pay Bills</a></li>
  <li><a href="insertrecord.php">Insert Record</a></li>
  <li><a href="listfiles2.php">Download Records</a></li>
</ul>

<div class="page">
<h1>Records</h1>
<p background-color :white;>
<?php
session_start();
// Connect to the database
$dbLink = new mysqli('localhost', 'group4', 'Group4@TSM', 'group4');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
$username = $_SESSION['username'];

// Query for a list of all existing files
$sql = 'SELECT `id`, `name`, `mime`, `size`, `created`, `username` FROM `file`';
$result = $dbLink->query($sql);
 
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Mime</b></td>
                    <td><b>Size (bytes)</b></td>
                    <td><b>Created</b></td>
		    <td><b>Username</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            if($row['username'] == $username){
            echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['mime']}</td>
                    <td>{$row['size']}</td>
                    <td>{$row['created']}</td>
		    <td>{$row['username']}</td>
                    <td><a href='get_file.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
}
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?>

</p>

</div>

</body>
</html>




