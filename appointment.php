<!DOCTYPE html>
<html>
<head>
        <title>Appointments</title>
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
        margin-left:-auto;
        color: black ;
        text-align: center;
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

p {
   color: white;
   background-color: black;
   margin-left: auto;
   margin-right: auto;
   width: 400px;
   height: auto;
   font-size: 18px;
   margin-bottom:50px;
}

.page{
        margin-left:25%;
        padding:1px 16px;
        height:99vh;
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

form{	
	text-align: center;
	
}

</style>
</head>
<body>

<ul>
  <li><a class="home" href="landingpage.php?username=<?php echo $username; ?>">Home</a></li>
  <li><a href="">Calander</a></li>
  <li><a href="appointment.php?username<?php echo $username; ?>">Appointments</a></li>
  <li><a href="">Medical History</a></li>
  <li><a href="">Messages</a></li>
  <li><a href="">Personal Info</a></li>
  <li><a href="">Pay Bills</a></li>
  <li><a href="insertrecord.php">Insert Record</a></li>
</ul>

<div class="page">
<h1>Appointments</h1> 
<p align = "center"> Your Upcoming Apointments:<br><br>
<?php
    $username = $_GET['username'];
    $con = mysqli_connect("localhost", "group4", "Group4@TSM", "group4");

    # create sql query and bind parameters
    $verifystmt = mysqli_prepare($con, "select patientID from PatientTableNew where username = ?");
    mysqli_stmt_bind_param($verifystmt, 's', $username);

    # Query the database to see i
    if(mysqli_stmt_execute($verifystmt)) {
        mysqli_stmt_bind_result($verifystmt, $result1);
        mysqli_stmt_fetch($verifystmt);
        mysqli_stmt_close($verifystmt);
    }

echo "Add query to datavase for 3 appointments coming up and print them, username=$username query result=$result1";
?>
<form action="schedulea.php" method="POST">
	<input type="submit" name="submit" value="Make Appointment" class="btn">
</form>
</p>
</div>
</body>
</html>

