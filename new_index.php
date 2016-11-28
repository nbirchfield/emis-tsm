<html>
  <head>
    	<title> Log In</title>
    
    <style>
      @font-face {
		font-family: Oswald;
		src: url('https://fonts.googleapis.com/css?family=Oswald');
	}
      
      body{
      		margin: 0 auto; 
      		background-image: url("http://i.imgur.com/zxmSRGc.jpg");
      		background-repeat: no-repeat;
      		background-size: 100%;
      }
      
      .container{
            	border-radius:5px;
      			width:300px;
      			height: 270px;
      			text-align: center;
      			background-color: rgba(255,255,255,0.45);
      			margin: 0 auto;
      			margin-top: 50px;
      }
      
      input[type="text"], input[type="password"]{
            border-color:rgba(0,0,0,.3);
      		border-radius:5px;
      		height: 18px;
      		width:190px;
      		font-size: 12px;
      		margin-top:30px;
      		background-color: rgb(220,220,220);
      		padding-left: 10px;
			font-family:Oswald;
			:white;
      }
      
   	h1{
		font-family:Oswald;
     	margin-bottom:0px;
      	color: rgb(153,153,153) ;
      }
      
      .btn-login{  
			font-family:Oswald;	  
            border-radius:5px;
      		margin-top:15px;
      		padding: 5px 40px;
      		background-color: rgb(38,159,220);
      		color:white;
			font-weight:bold;
            border-color:rgba(0,0,0,.3);
      		margin-bottom:5px;
			font-size:16px;
      }
      
      a:link,a:visited {
		font-size:12px;
	  	font-family:Oswald;
   		color: rgb(38,159,220);
	}     
	a:hover {
		font-family:Oswald;
    	color: red;
	}
	
	
	::-webkit-input-placeholder { /* WebKit, Blink, Edge */
		color:white;
	}
	:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
		color:white;
		opacity:  1;
	}
	::-moz-placeholder { /* Mozilla Firefox 19+ */
		color:white;
		opacity:  1;
	}
	:-ms-input-placeholder { /* Internet Explorer 10-11 */
		color:white;
	}
	
      
     </style> 
    
  </head>
	<body>
      	<div class="container">
          <h1 > Login</h1>
          	<form>
				<div class="username">
                  	<input type="text" name="username" placeholder = "Username">
                  
               </div>   
              <div class="password">
                  	<input type="password" name="password" placeholder ="Password">
               </div>   
              
              <input type="submit" name="submit" value="Sign In" class="btn-login">
              

            </form> 
           		<a href=""> Help, i forgot my password</a><br>
            	<a href="newaccount.php"> Sign Up</a> 
         </div>
      </body>
  </html>
