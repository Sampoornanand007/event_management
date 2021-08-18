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
h3{
  margin:0;
}

  a{
color:black;
font-size:18px;
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
    	height: 1500px;
    	background-color:#C09F80;
      top:0;
      padding:40px;

    }

    .box
	{
     position:absolute;
     top:25%;
     left:35%;
     transform-translate:(-50%,-50%);
     width:210px;
     height:100px;
     padding:20px 40px;
     box-sizing:border-box;
     background:rgba(0,0,0,.3);

	}
	.headcolor
	{
		color: white;
	}

  form{
    padding:10px;
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
            	<!-- <li class="red"><a href="upload.php">ADD VENUE</a></li> -->

                            
               
                </li>
                
                <li class="red"><a href="viewbooking.php">VIEW BOOKINGS</a></li>
                
                	<li><a href="viewfeedback.php">VIEW FEEDBACK</a></li>
                  <li><a href="paydetails.php">PAYMENT DETAILS</a></li>


                		<li><a href="logout.php">LOGOUT</a>
                			

                </li>

            </div>
        </div>

    <div class="xyz">
    	
    		<center><h3 style="color: white";>BOOKINGS</h3></center>
    		<form>
          <center><table cellpadding="10px" height="200px" width="800px" border="2px" cellspacing="0">
            <thead>
              <tr>
                <th>CARD</th>
                <th>CVV</th>
                <th>NAME</th>
                <th>EXPIRATION</th>
                

              </tr>
            </thead>

                    <tbody> 

<?php
 include("dbconfig.php");
{


 $q="select * from payment";

 $query=mysqli_query($conn,$q);
 while($row=mysqli_fetch_array($query)){?>
  <tr>
    <td><?php echo $row['card']; ?></td>
    <td><?php echo $row['cvv']; ?></td>
    <td><?php echo $row['name'];  ?></td>
    <td><?php echo $row['expiration']; ?></td>


  </tr>

 <?php } }?>
</tbody>


</table>
</center>
</form>

 
</div>


            <div class="b">
           
         <center>  <img src="img/logo.
png" width="140px" height="100px"></center>
<h5 style="color:skyblue">
    
    <p><center>Event Management is an occasion for which you gather people to celebrate,discuss, display, create or build something.</center></p>
</h5>

       

<center>
<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
<i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
<i class="fa fa-2x fa-envelope" aria-hidden="true"></i>
</center>

            <h5 style="color:skyblue">
        <p><center> + 61 2 9659 8855|info@Paragon Group.com </center></p>
    </h5>
            </div>
    

</body>
</html>