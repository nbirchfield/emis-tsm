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

div{
    margin-left: 25%;

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
	position:relative;
	left: 40%;
        
	margin-top:auto;
}

.btn:hover{
        background-color:red;
}

.btn.submit{
    font-family:Oswald;
    border-radius:5px;
    padding: 5px 55px;
    background-color: rgb(38,159,220);
    color:white;
    font-weight:bold;
    border-color:rgba(0,0,0,.3);
    font-size:16px;
	position:center;
	left: 40%;
        
	margin-top:auto;
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
  <li><a href="">Make Appointment</a></li>
  <li><a href="">Medical History</a></li>
  <li><a href="">Messages</a></li>
  <li><a href="">Personal Info</a></li>
  <li><a href="">Pay Bills</a></li>
  <li><a href="insertrecord.php">Insert Record</a></li>
</ul>

<div class="page">
<h1 align]"left">Schedule Appointment</h1> 
<form id="input" >
    <input type ="text" name="firstname" value="FirstName"> <br>
  
    <input type ="text" name="lastname" value="LastName"> <br>
    
    <input type ="date" name="date" value="Date of Appointment"> <br>
    Select a doctor <br>
    <select name="Doctors" name="doctor">
           <option value="Doctor1">Doctor1</option>
           <option value="Doctor2">Doctor2</option>
           <option value="Doctor3">Doctor3</option>
    </select> <br>
    <textarea name="reason" rows = "5" cols = "50">
Type reason for appointment here.
    </textarea> <br>
<form action="" method="POST">
	<input type="submit" name="submit" value="Submit" class="btn">
</form>
</form>
<form action="appointment.php" method="POST">
	<input type="submit" name="back" value="Back" class="btn">
</form>
</p>



</div>

</body>
</html>

