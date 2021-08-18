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
            	 <li><a href="REGISTRATION.php">REGISTRATION</a></li>
                <li><a href="userview.php">VIEW BOOKING</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                 <li><a href="update.php">UPDATE EVENTS</a></li>
                 <li><a href="payment.php">PAYMENT</a></li>
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
                <th>NAME</th>
                <th>ID</th>
                <th>PHONE NO</th>
                <th>BOOK EVENT</th>
                <th>VENUE</th>
                <th>VENUE TYPE</th>
                <th>PLACE</th>
                <th>PERSONS</th>
                <th>DATE</th>
                <th>FOOD</th>
                <th>LIGHTINGS</th>
                <th>FLOWERS</th>
                <th>SEATINGS</th>
                <th>EQUIPMENTS</th>
                <th>STATUS</th>
                <th>TOTAL</th>
                
                

              </tr>
            </thead>

                    <tbody> 

<?php
 include("dbconfig.php");
{
  session_start();
   $user=$_SESSION['user'];

 $q="select * from bookevents where name='".$user."'";
echo $q;
 $query=mysqli_query($conn,$q);
 while($row=mysqli_fetch_array($query))

  {?>
  


  <tr>    
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['ph_no'];  ?></td>
    <td><?php echo $row['b_event']; ?></td>
    <td><?php echo $row['venue']; ?></td>
    <td><?php echo $row['venuetype']; ?></td>
    <td><?php echo $row['place']; ?></td>
     <td><?php echo $row['no_persons']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['food']; ?></td>
    <td><?php echo $row['lightings']; ?></td>
    <td><?php echo $row['flowers']; ?></td>
    <td><?php echo $row['seatings']; ?></td>
    <td><?php echo $row['equipments']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['addprice']; ?></td>
        
    
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
        <p><center> &copy; SRS Events Venue & Catering, 2021. </center></p>
    </h5>
            </div>
    

</body>
</html>