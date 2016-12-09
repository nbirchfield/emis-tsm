<!DOCTYPE html>
<html>
<head>
        <title>Appointment</title>
<style>

form{
		text-align: center;
	
}

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
        color: rgb(38,159,220);
}

:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
        color: rgb(38,159,220);
        opacity:  1;
}

::-moz-placeholder { /* Mozilla Firefox 19+ */
        color: rgb(38,159,220);
        opacity:  1;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: rgb(38,159,220);
}


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

p :not .select doctor{
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
.btn-s{
    font-family:Oswald;
    border-radius:5px;
    padding: 5px 47px;
    background-color: rgb(38,159,220);
    color:white;
    font-weight:bold;
    border-color:rgba(0,0,0,.3);
    font-size:16px;

}

.btn:hover, .btn-s:hover{
        background-color:red;
}

.home{
        margin-top:70%;
}

input[type="text"], input[type="date"]{
    border-color:rgba(0,0,0,.3);
    border-radius:5px;
    height: 24px;
    width:180px;
    font-size: 14px;
    margin-top:10px;
    background-color: rgb(220,220,220);
    padding-left: 10px;
    font-family:Oswald;
}

select{
    border-color:rgba(0,0,0,.3);
    border-radius:5px;
    height: 25px;
    width:150px;
    font-size: 14px;
    margin-top:10px;
    background-color: rgb(220,220,220);
    padding-left: 10px;
    font-family:Oswald;
}


</style>
</head>
<body>

<ul>
  <li><a class="home" href="landingpage.php">Home</a></li>
  <li><a href="">Calander</a></li>
  <li><a href="appointment.php">Make Appointment</a></li>
  <li><a href="">Medical History</a></li>
  <li><a href="">Messages</a></li>
  <li><a href="">Personal Info</a></li>
  <li><a href="">Pay Bills</a></li>
  <li><a href="insertrecord.php">Insert Record</a></li>
</ul>

<div class="page">

    <h1 align="left">Schedule Appointment</h1>

    <form action="makeappointment.php" method="post" >
        <input type ="text" name="firstname" placeholder="First Name"> <br>
        <input type ="text" name="lastname" placeholder="Last Name"> <br>
        <input type="datetime" name ="datetime" placeholder="date/time">

        <p class="select doctor" style="color:">
            <select name="doctor">
		        <option value="" disabled selected>Select your Doctor</option>
                <option>Doctor1</option>
                <option>Doctor2</option>
                <option>Doctor3</option>
            </select>
	    </p>

        <textarea name="reason" placeholder="Type reason for appointment" rows = "5" cols = "50"></textarea> <br>

        <input type="submit" name="submit" value="Submit" class="btn-s">
    </form>

    <form action="appointment.php" method="POST">
        <input type="submit" name="back" value="Back" class="btn">
    </form>

</div>

</body>
</html>

