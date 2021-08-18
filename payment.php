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
               <li><a href="REGISTRATION.php">REGISTRATION</a></li>
                <li><a href="userview.php">VIEW BOOKING</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <!-- <li><a href="update.php">UPDATE EVENTS</a></li> -->
                 <li><a href="payment.php">PAYMENT</a></li>
                  <li><a href="logout.php">LOGOUT</a>
                      

                </li>

            </div>
        </div>
	
	   
    <div class="xyz">

    <div class="box">
    	<center>
    		<h2 style="color: white";>PAYMENT</h2>
    		<form method="POST">
    			<Table height="200px" cellspacing="10">
		<tr>
			<td class="headcolor">Card no:</td>
			<td><input type="text" placeholder="" name="card" class="txtcolor"></td>
		</tr>
		<tr>
	<td class="headcolor">CVV no:</td>
	<td><input type="text" placeholder="" name="cvv" class="txtcolor"></td>

<tr>
<td class="headcolor">Name on Card</td>
	<td><input type="text" placeholder="" name="name" class="txtcolor"></td>
</tr>
<tr>
<td class="headcolor">Expiration</br>MM/YYYY</td>
<td><input type="date" placeholder="mm-dd-yy" name="expiration" class="txtcolor"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="submit" value="pay"></td>
</tr>
</Table>
</form></center>
  <?php
   include("dbconfig.php");

  if(isset($_POST['submit']))
  
 {
    $card=$_POST['card'];
    $cvv=$_POST['cvv'];
    $name=$_POST['name'];
    $expiration=$_POST['expiration'];

  


    $q="insert into payment(card,cvv,name,expiration)values('".$card."','".$cvv."','".$name."','".$expiration."');";

    $query=mysqli_query($conn,$q);

    echo "payment success";    
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







