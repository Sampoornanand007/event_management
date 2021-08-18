<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wedding</title>
	<meta charset="utf-8">
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

 

      p{
    text-align:justify;
    font-family:times roman;
    margin-top:30px;
   }

   .slide
   {
    
    height: 450px;
    
    margin-top: 30px;
    padding: 10px;
    border: 1px solid;
   }

  .slide img{
    width:90%;
    height:300px;
    padding: 0px;
   }

  

   form
   {
    margin-top: 20px;
    height: 355px;
    margin-top: 30px;

   }


   .fst
   {
    width: 300px;
    height: 450px;
    margin-top: 30px;
    border:1px solid #aaa;
    margin-left:20px;
    padding:0;

   }

    .stylecolumn
    {
        height:120px;
        width:265px;
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


    .btnstyle{
        width:265px;
    }

     .col-md-3{
      margin-top: 70px;
      margin-left: 80px;
    }


    
    .j{
      margin-top:50px;
    }

    .k{
      margin-top:50px;
    }

  



	</style>

	<script>
		
		var a=new Array();
		a[0]=new Image();
		a[0].src="img/h7.jpg";

		a[1]=new Image();
		a[1].src="img/hp3.jpg";

        a[2]=new Image();
		a[2].src="img/hp4.jpg";

        a[3]=new Image();
		a[3].src="img/hp10.jpg";

        a[4]=new Image();
		a[4].src="img/hp12.jpg";


        a[5]=new Image();
		a[5].src="img/hp14.jpg";

var i=0;

function slider()
{
	document.getElementById("a").src=a[i].src;
	if(i<a.length-1)
		i++;
	else
		i=0;
	setTimeout("slider()",2000)
}



	</script>

</head>
<body onload="slider()">

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
        <!--  <li><a href="admin.php">ADMIN LOGIN</a></li> -->
          <li><a href="signup.php">SIGN UP</a></li>

          
        </ul>
        </li>
        <li><a href="contactus.php">CONTACT US</a></li>


               <li><a href="aboutus.php">ABOUT US</a>
        </li>


    </div>   <br>
   
</div>
	  </div>  <div class="container">
        <div class="row">
            <div class="col-md-8 slide">

    <center><h1><center>House Party</center></h1>
<p><h4>If it comes to House party, it can be anything like baby shower, family get together etc. you can oraganise the party at our location or it can be your location. </h4></p>

            <img src="img/b9.jpg"  id="a"></center>
                
            </div>
        <div class="col-md-4"></div>
            <div class="col-md-5 fst">
            

                <div class="panel-heading">

                  <center><h2 class="panel-title">&nbsp;&nbsp;<b>GET IN TOUCH WITH US</b></h2><hr></center>

                    <form method="POST">


<div class="form-group">
      
      <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name">
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="contact" placeholder="Enter Your Contact Number" name="contact">
    </div>

    <div class="form-group">
      

    <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email">
    </div>
<div>
    <textarea class="stylecolumn" name="query">Enter Your Query</textarea>
  </div>

    
    <button type="submit" class="btn btn-default btnstyle" name="submit">Submit</button>
  </form>
</div>

</div>
            
    </div>

        </div> 

         <div class="z">
  <div class="container-fluid">
    <center><b><h2><ins>View & Book Venues</ins></h2></b></center>

  <center>  <h4><b><ins>P.S GARDEN</ins></b></h4></center>
   <center> <h5><b>
   (GURDASPUR)</b></h5></center>
  <div class="row">
      <div class="col-md-3">
   
  <img src="img/7731.jpg" width="320px" height="160px">
 <center><h4> (Venue Name)</h4> <h5><b>Banquet Hall</b></h5>
  <h4>Rs.15,000</h4></center>
</div>

    <div class="col-md-3">
  <img src="img/cf2.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Wedding Hall</b></h5>
  <h4>Rs.25,000</h4></center>

</div>
     
     <div class="col-md-3">
  <img src="img/17.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Party Lawn</b></h5>
  <h4>Rs.30,000</h4></center>
   </div>
 </div>

   <div class="j">
<div class="container-fluid">
    <center>  <h4><b><ins>CRYSTAL FARM</ins></b></h4></center>
   <center> <h5><b>BATALA ROAD (GURDASPUR)</b></h5></center>
       <div class="row">
      <div class="col-md-3">
   
  <img src="img/ph.jpg" width="320px" height="160px">
 <center><h4> (Venue Name)</h4> <h5><b>Banquet Hall</b></h5>
  <h4>Rs.18,000</h4></center>
</div>

    <div class="col-md-3">
  <img src="img/cf.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Wedding Hall</b></h5>
  <h4>Rs.20,000</h4></center>

</div>
     
     <div class="col-md-3">
  <img src="img/pl.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Party Lawn</b></h5>
  <h4>Rs.15,000</h4></center>
   </div>

 </div>

  <div class="k">
<div class="container-fluid">
    <center>  <h4><b><ins>ROYAL VIRDI RESORT</ins></b></h4></center>
   <center> <h5><b>
   MUKERIAN ROAD(GURDASPUR)</b></h5></center>


      <div class="row">
      <div class="col-md-3">
   
  <img src="img/7732.jpg" width="320px" height="160px">
 <center><h4> (Venue Name)</h4> <h5><b>Banquet Hall</b></h5>
  <h4>Rs.15000</h4></center>
</div>

    <div class="col-md-3">
  <img src="img/picture1.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Wedding Hall</b></h5>
  <h4>Rs.25000</h4></center>

</div>
     
     <div class="col-md-3">
  <img src="img/cf3.jpg" width="320px" height="160px">
  <center><h4> (Venue Name)</h4> <h5><b>Party Lawn</b></h5>
  <h4>Rs.22,000</h4></center>
   </div>

   
</div> 

         <?php
 include("dbconfig.php");


if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $con=$_POST['contact'];
  $email=$_POST['email'];
  $query=$_POST['query'];


$q="insert into houseparty(name,contact,email,query)values('".$name."','".$con."','".$email."','".$query."');";

$query=mysqli_query($conn,$q);


echo "submitted query";
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
        <p><center> &copy; SRS Events Venue & Catering, 2021. </center></p>
    </h5>
            </div>
    </div>



	
</body>
</html>