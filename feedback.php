<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin1</title>
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
    margin:0!important;
    font-size:18px;
}

  a{
color:black;
}

    .container-fluid{

background-color:#DCD0C0;
padding:0;

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

    	width: 100%;
    	height: 400px;
    	background-color:#C09F80;
      top:0;
      padding:40px;
      

    }
textarea
  {
    height: 200px;
    width: 200px;
  }
  
	.headcolor
	{
		color: white;
	}
  h3
  {
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
            	     <li><a href="registration.php">REGISTRATION</a>
                   <li><a href="userview.php">VIEW BOOKING</a>
                	<li><a href="feedback.php">FEEDBACK</a>
                    <li><a href="update.php">UPDATE EVENTS</a>
                    <li><a href="payment.php">PAYMENT</a></li>
                		<li><a href="logout.php">LOGOUT</a>
                			

                </li>

            </div>
        </div>
  
    <div class="xyz">

    
        <center><h3 style="color:lightyellow";>Your Feedback is Valuable for Us!!!</h3></center>
    
    <form method="POST">
      <center>
      <table>

<tr>
  <td>
        <textarea class="stylecolumn" name="feedback"> 
          
    
        </textarea> </td></tr>

        <tr>
          
         
          <td>

        <center><input type="submit" name="submit" value="send"></center>
            
           </td>
         </tr>

        
       </table>
     </center>
     </form>

</div>

<?php
 include("dbconfig.php");


if(isset($_POST['submit']))
{
  $feed=$_POST['feedback'];


  


$q="insert into feedback(feedback)values('".$feed."');";

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
        <p><center> &copy; SRS Events Venue & Catering, 2021. </center></p>
    </h5>
            </div>
    </div>

</body>
</html>







