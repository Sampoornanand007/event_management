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
   
    .kk{

      width: 100%;
      height:400px auto;
      background-color:#C09F80;
      top:0;
      padding:40px;

    }

    .b img{
  width: 140px;
  height: 100px;

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

  
	.headcolor
	{
		color: white;
	}



   #content{
    width:50%;
    margin:20px auto;
    border: 1px solid #cbcbcb;
   }

   form{
    width: 50%;
    margin:20px auto;
   }

   form div{
    margin-top: 5px;
   }

#img_div{
  width: 80%;
  padding: 5px;
  margin:15px auto;
  border: 1px solid #cbcbcb;
}

#img_div:after{
  content: "";
  display
}

img{
  float: left;
  margin:5px;
  width: 300px;
  height: 140px;
}

.b img{
  width: 140px;
  height: 100px;

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
               <li class="red"><a href="upload.php">ADD VENUE</a></li>

                            
               
                </li>
               
                <li class="red"><a href="viewbooking.php">VIEW BOOKINGS</a></li>
                
                  <li><a href="viewfeedback.php">VIEW FEEDBACK</a>
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
     <input type="hidden" name="size" value="100000">
     <div>
      <input type="file" name="img">
     </div>

     <div>
      <textarea name="text" cols="40" rows="4" placeholder="say something about this image..."></textarea>
     </div>

     <div>
      <input type="submit" name="upload" value="Upload Image">
     </div>
  </form>
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







