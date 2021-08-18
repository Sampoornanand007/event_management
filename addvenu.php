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
    }

    .box
	{
     position:absolute;
     top:19%;
     left:25%;
     transform-translate:(-50%,-50%);
     width:600px;
     height:350px;
     padding:20px 40px;
     box-sizing:border-box;
     background:rgba(0,0,0,.3);

	}
	.headcolor
	{
		color: white;
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
            	 <li class="red"><a href="upload.php">ADD VENUE</a></li>

                            
               
                </li>
               
                <li class="red"><a href="viewbooking.php">VIEW BOOKINGS</a></li>
                
                	<li><a href="viewfeedback.php">VIEW FEEDBACK</a>
                		<li><a href="paydetails.php">PAYMENT DETAILS</a></li>

                		<li><a href="logout.php">LOGOUT</a>
                			

                </li>

            </div>
        </div>
    </div>
    <div class="xyz">

    <div class="box">
    	<center>
    		<h2 style="color: white";>ADD VENUE</h2>
    		<form method="POST" enctype="multipart/form-data">
    			<Table height="250px" cellspacing="20">
		<tr>
			<td class="headcolor">VENUE NAME:</td>
			<td><input type="text" placeholder="Venue Name" name="name" class="txtcolor"></td>
		</tr>
		<tr>
	<td class="headcolor">VENUE ADDRESS:</td>
	<td><input type="text" placeholder="Venue Adress" name="address" class="txtcolor"></td>
</tr>
<tr>
	<td class="headcolor">BOOK YOUR EVENT:</td>
	<td><select numbers="numbers" class="txtcolor" name="event">
	<option value="select">Select</option>
	<option value="birthday">BIRTHDAYS</option>
	<option value="wedding">WEDDINS</option>
	<option value="houseparties">HOUSE PARTIES</option> 
	<option value="officeparty">OFFICE PARTY</option>
	<option value="kidsevent">KIDS EVENT</option>
	
</select>
</td>
</tr>

<td class="headcolor">Rs:</td>
	<td><input type="text" placeholder="Rs" name="rs" class="txtcolor"></td>
</tr>
<tr>
<td class="headcolor">Image:</td>
<td><input type="file" name="pics"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Upload"></td>
</tr>
</Table>
</form></center>
  <?php

  if(isset($_POST['submit']))
  {
  	 if(isset($_FILES['pics']))
 {
    $name=$_POST['name'];
    $ad=$_POST['address'];
    $event=$_POST['event'];
    $rs=$_POST['rs'];

   $filename=$_FILES['pics']['name'];
  $temp=$_FILES['pics']['tmp_name'];

   move_uploaded_file($temp,"img1/".$filename);
  $path="img1/".$filename;

    

    $conn=mysqli_connect("localhost","root","","events") or die("connection is not established");

    $q="insert into add_venue(name,address,event,rs,pics)values('".$name."','".$ad."','".$event."','".$rs."','".$path."');";

    $query=mysqli_query($conn,$q);

    echo "upload successfully";
    
    //header("location:login.php");
    //  echo "<script>location.replace('login.php')</script>";

  }
}
  ?>


	
</div>
</div>
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
    </div>

</body>
</html>







