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
		color:black;
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
            	 <li class="red"><a href="upload.php">ADD VENUE</a></li>

                            
               
                </li>
                
                <li class="red"><a href="viewbooking.php">VIEW BOOKINGS</a></li>
                
                	<li><a href="viewfeedback.php">VIEW FEEDBACK</a></li>
                		<li><a href="logout.php">LOGOUT</a>
                			

                </li>

            </div>
        </div>

    <div class="xyz">
    	
    		<center><h3 style="color: white";>BOOKINGS</h3></center>
    		<form method="POST">
          <center><table cellpadding="10px" height="100px" width="100px" border="2px" cellspacing="0">
           
              <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email"></td>
              </tr>
              

               <tr>
            <td class="headcolor">
  
            CHANGE:</td>
            <td><input type="text" class="txtcolor" name="change">
                     </td>
         </tr>

              
    
         <tr>
          <td></td>
              <td><input type="submit" name="add" value="status change"></td>
            </tr>
    
</table>
</center>
</form>
    
  <?php
include("dbconfig.php");
  {

  if(isset($_POST['add']))
  {
    
    $email=$_POST['email'];
    $change=$_POST['change'];
    
    
  
  $q="update bookevents set statuschange='".$change."' where email='".$email."';";
echo $q;

  $query=mysqli_query($conn,$q);
  
  echo "query updated";
  }
}
?>
     

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