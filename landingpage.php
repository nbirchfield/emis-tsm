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
    <li><a href="logout.php">Log Out</a></li>
</ul>

<div class="page">
<h1>Welcome</h1>

</div>

</body>
</html>

