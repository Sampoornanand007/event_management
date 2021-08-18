<?php

$msg="";

//if upload button is pressed
if(isset($_POST['upload'])){

	$target="images/".basename($_FILES['img']['name']);

	//connect to the database
	$db=mysqli_connect("localhost","root","","events");

	//get all the submitted data from the form
	$image=$_FILES['img']['name'];
	$text=$_POST['text'];

	$sql="INSERT INTO images (image,text) VALUES ('$image', '$text')";
	mysqli_query($db, $sql); //stores the submitted data into the database table: images

	//now let's move the uploaded image into the folder: images

	if (move_uploaded_file($_FILES['img']['name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg ="There was a problem uploading image";
	}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMAGE UPLOAD</title>

	<script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/bootstrap.js"></script>

	<style>

	.navbar-header img{
        margin-left:60px;
        width: 140px;
        height: 100px;

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


    .b {
        width: 100%;
        height: 300px;
        background-color:#373737;
        padding: 20px;
    }

i{
    color: white;
   }
  
		.kk{

      width: 100%;
      height:400px auto;
      background-color:#C09F80;
      top:0;
      padding:40px;

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
	padding:5px;
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
    margin-left:580px;
}

p{
	margin-top:120px;
	margin-left:340px; 
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
                    <li><a href="paydetails.php">PAYMENT DETAILS</a></li>

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

           
           <img src="img/logo.png">
           <h5 style="color:skyblue">

          <p>Event Management is an occasion for which you gather people to celebrate,discuss, display, create or build something.</p>
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