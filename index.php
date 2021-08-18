<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	
    .slide{
        padding:0;
    }	

    p{
    text-align:justify;
    font-family:times roman;
    margin-top:30px;
   }

   .slide img{
   	width:100%;
   	height:400px;
   }

a{
color:black;

}
   
   i{
    color: white;
   }

    .b {
        width: 100%;
        height: 300px;
        background-color:#373737;
        padding: 20px;
    }
    
    .xyz{
        width:100%;
        height:400px;
        background-color:#DCD0C0;
    }

    .xyz img{
        margin-top:25px;
        margin-left:90px;
    }



	</style>

	<script>
		
		var a=new Array();
		a[0]=new Image();
		a[0].src="img/eb.jpg";

		a[1]=new Image();
		a[1].src="img/em1.jpg";

       
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
         <!-- <li><a href="admin.php">ADMIN LOGIN</a></li> -->
          <li><a href="signup.php">SIGNUP</a></li>

          
        </ul>
        </li>
        <li><a href="contactus.php">CONTACT US</a></li>


       
      <li><a href="aboutus.php">ABOUT US</a>
        </li>


    </div>
   
</div>
	
	
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 slide">

            <img src="img/b9.jpg"  id="a">
                
            </div>
        <div class="col-md-4"></div>
	
</div>
            
    </div>

    <div class="xyz">
       <img src="img/7731.jpg"  width="320px" height="160px"> 
       <img src="img/b9.jpg"  width="320px" height="160px"> 
       <img src="img/of6.jpg"  width="320px" height="160px"> 
         <img src="img/17.jpg"  width="320px" height="160px"> 
       <img src="img/7731.jpg"  width="320px" height="160px"> 
       <img src="img/hp14.jpg"  width="320px" height="160px"> 


       
    </div>

   
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
        
      

        
    
     
    

</body>
</html>