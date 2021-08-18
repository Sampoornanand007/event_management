<?php

$msg="";

//if upload button is pressed
if(isset($_POST['update'])){

  $target="images/".basename($_FILES['img']['name']);

  //connect to the database
  $db=mysqli_connect("localhost","root","","events");

  //get all the submitted data from the form
  $image=$_FILES['img']['name'];
  $text=$_POST['text'];

  
  }

?>


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
        height: 100px;
        width: 140px;

    }
.navbar-collapse{
    padding-top: 20px;
    font-size:18px;
}

    .container-fluid{

background-color:#DCD0C0;
padding:0; 
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

.b img{
  width: 140px;
  height: 100px;
}
      #content{
    width:25%;
    margin:25px auto;
    border: 3px solid #cbcbcb;
   }

   form{
    width: 80%;
    margin:20px auto;
   }

   form div{
    margin-top: 5px;
   }

img{
  float: left;
  margin:5px;
  width: 300px;
  height: 140px;
}


  .kk{

      width: 100%;
      height:400px auto;
      background-color:#C09F80;
      top:0;
      padding:40px;

    }
 .b img{
  margin-left: 580px;
 }

 p{
  margin-top:20px;
 }




	</style>

  </head>
<body>
 <div class="container-fluid">
        <div class="navbar-header">
            <img src="img/logo.png">

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="registration.php">REGISTRATION</a></li>
                <li><a href="userview.php">VIEW BOOKINGS</a></li>
                  <li><a href="feedback.php">FEEDBACK</a>
                    <li><a href="update.php">UPDATE EVENTS</a>
                      <li><a href="payment.php">PAYMENT</a></li>
                    <li><a href="logout.php">LOGOUT</a>
                      

                </li>

            </div>
        </div>
    </div>

<div class="kk">
<div id="content">
     

    <?php
        
        $db=mysqli_connect("localhost","root","","events");
        $sql="SELECT * FROM images";
        $result=mysqli_query($db, $sql);
        while ($row=mysqli_fetch_array($result)) {
          echo "<div id='img_div'>";
            echo "<img src='img/".$row['image']."' >";
          echo "<p>".$row['text']. "</p>";
          echo "</div>";

          
        }
    ?>
  
  <form method="post" action="upload.php" enctype="multipart/form-data">

  </form>
</div>  
    </div>
        
   
  
  
    
 
           <div class="b">
           
          <center><img src="img/logo.png"></center>
          
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