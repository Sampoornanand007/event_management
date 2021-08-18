<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

 .aaa{
    padding:0;
 }

    h1 {
        font-family: monospace;
    }

    h2 {
        font-family:Arial Narrow;	
    }

    .row {

        padding: 30px;
    }

    .xyz{
        margin-left:15px;
    }
    

    a{
color:black;
}
   
   i{
    color: white;
    font-size: 18px;
   }
   
   .b {
        width: 100%;
        height: 300px;
        background-color:#373737;
        padding: 20px;
    }

    
    



   
    </style>
</head>

<body>
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
        		<li><a href="#">OFFICE PARTY</a></li>
        		<li><a href="#">HOUSE PARTIES</a></li>
        		<li><a href="#">KIDS PARTY</a></li>
        	</ul>
               
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MY ACCOUNT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="login.php">USER LOGIN</a></li>
                      <!--  <li><a href="#">ADMIN LOGIN</a></li> -->
                        <li><a href="signup.php">SIGN UP</a></li>

                    </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
                
               <li><a href="aboutus.php">ABOUT US</a>
                </li>

        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-6 first">
            <div class="aaa">

                <p>
                    <h1>SRS GROUP</h1>
                    <br>
                    <br> T:<h style="color:skyblue">+91 9540555301</h>
                    <br>
                    <br> E:<h style="color:skyblue">contact@srsgroup.com</h>
                    <br>
                    <br>
                    <br>
                </p>
            </div>
        </div>
        <div class="col-md-6 second">
           <div class="xyz">
                <p>
                    <h1>WANT TO WORK WITH SRS GROUP?</h1>
                    <br>
                    <br>Fill in your contact details and a bit about your event management
                    <br>
                    <br> or content requirements and one of our experienced team members
                    <br>
                    <br> will be in touch shortly.
                    <br>
                    <br>
                </p>
                <form method="POST">
                    <input type="text" placeholder="Name" name="name">
                    <input type="email" name="email" placeholder="Email Address">
                    <br>
                    <br>
                    <input type="number" name="phone" placeholder="Phone No.">
                    <input type="text" name="info" placeholder="Any additional information">
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
    </div>

<?php
 include("dbconfig.php");


if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
   $phone=$_POST['phone'];
  $info=$_POST['info'];


$q="insert into contactus(name,email,phone,info)values('".$name."','".$email."','".$phone."','".$info."');";

$query=mysqli_query($conn,$q);


echo "submitted ";
}

?>


  
    <div class="b">
           
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
        <p><center>  &copy; SRS Events Venue & Catering, 2021. </center></p>
    </h5>
            </div>
    </div>
      

    
</body>

</html>