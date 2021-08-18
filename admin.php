<?php
  include("dbconfig.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transparent Login Form</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Document</title>

    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/bootstrap.js"></script>


	<style>


    .navbar-header img{
        margin-left:60px;

    }
.navbar-collapse{
    padding-top: 20px;
    font-size:18px;

}

    .container-fluid{

background-color:#DCD0C0;
padding:0; 
    }

	
   
   .user img
	{
      width:100%;
      height:100%;
      background-size: cover;
      font-family: sans-serif;
	}

	.LoginBox
	{
     position: absolute;
     top:20%;
     left:35%;
     transform-translate:(-50%,-50%);
     width:350px;
     height: 420px;
     padding:80px 40px;
     box-sizing:border-box;
     background:rgba(0,0,0,.7);

	}
    .user
    {
     width:100px;
     height:100px;
     border-radius:50%;
     overflow: hidden;
     position: absolute;
     top:calc(-100px/2);
     left:calc(35%);
    }

    h2
    {
    	margin:0;
    	padding:0 0 20px;
    	color:#efed40;
    	text-align: center;
    }

.LoginBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}

.LoginBox input
{
	width: 100%;
	margin-bottom: 20px;
}

.LoginBox input[type="text"],
.LoginBox input[type="password"]
{
	border:none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

::placeholder
{

	color: rgba(255,255,255,.5);
}    

.LoginBox input[type="submit"]
{
	border:none;
	outline: none; 
	height: 40px;
	color: #fff;
	font-size: 16px;
	background: #ff267e;
	cursor:pointer;
	border-radius: 20px;
}
.LoginBox input[type="submit"]:hover
{
	background: #efed40;
    color: #262626;
}

.LoginBox a
{

	color: #fff;
	font-size:14px;
	font-weight:bold;
	text-decoration: none;
}

 .stylecolumn
    {
        height:120px;
        width:265px;
    }

    .btnstyle{
        width:265px;
    }

    .b {
        width: 100%;
        height: 250px;
        background-color: black;
        padding: 20px;
    }


   
   i{
    color: white;
    font-size: 18px;
   }

    .d {
        width: 100%;
        height: 300px;
        background-color:#373737;
        padding: 20px;
    }  

	</style>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="img/logo.png" width="140px" height="100px">

 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="red"><a href="index.php">HOME</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS<span class="caret"></span></a>
        	<ul class="dropdown-menu">
        		<li><a href="birthday.php">BIRTHDAYS</a></li>
        		<li><a href="wedding.php">WEDDINGS</a></li>
        		<li><a href="officeparty.php">OFFICE PARTY</a></li>
        		<li><a href="houseparties.php">HOUSE PARTIES</a></li>
        		<li><a href="kidsparty.php">KIDS PARTY</a></li>
        	</ul>
        
        
      
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MY ACCOUNT<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="login.php">USER LOGIN</a></li>
          <li><a href="admin.php">ADMIN LOGIN</a></li>
          <li><a href="signup">SIGN UP</a></li>
          
        </ul>
        </li>
        <li><a href="contactus.php">CONTACT US</a></li>


              <!-- <li><a href="aboutus.php">ABOUT US</a></li> -->


    </div>
   
</div>




<div class="photo">
<img src="img/reg1.jpg" width="100%" height="600px">

<div class="LoginBox">
	<img src="img/logo3.png" class="user">
<h2>ADMIN LOGIN</h2>
<form method="POST">
	<p>Username</p>
	<input type="text" name="user" placeholder="Enter Email">
	<p>Password</p>
	<input type="Password" name="password" placeholder="Password">
	<input type="submit" name="login" value="Login">
	<a href="#> Forget Password"</a>


</form>
</div>


   
    <div class="d">
           
         <center>  <img src="img/logo.png" width="140px" height="100px"></center>
<h5 style="color:skyblue">
    
    <p><center>Event Management is an occasion for which you gather people to celebrate,discuss, display, create or build something.</center></p>
</h5>

       

<center>
<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
<i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
<i class="fa fa-2x fa-envelope" aria-hidden="true"></i>
</center>

              <h5 style="color:skyblue">
        <p><center> &copy; SRS Events Venue & Catering, 2021. </center></p>
    </h5>
        

        
    
     
    </div>

    <?php 
        if(isset($_POST['login']))
        {
             $user=$_POST['user'];
             $pass=$_POST['password'];

            
            $q="select * from admin where username='".$user."' and password='".$pass."';";
                echo $q;
                
                $query=mysqli_query($conn,$q);

                while($row=mysqli_fetch_array($query))
                {

                    if($row['username']==$user && $row['password']==$pass)
                    {
                      //  session_start();
                        //$_SESSION['user']=$user;
                        //header("location:homepage2.php");

                      echo "<script>location.replace('upload.php')</script>";

                    }
                    else
                    {
                       // echo"<script>alert('username and password not exist')</script>";
                    }
                }

        }

    ?>          
    
 
    
</body>
</html>
