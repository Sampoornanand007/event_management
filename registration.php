<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Document</title>

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


    img a
	{
      width:100%;
      height:100%;
      background-size: cover;
      font-family: sans-serif;
	}


	.box
	{
     position:absolute;
     top:30%;
     left:35%;
     transform-translate:(-50%,-50%);
     width:550px;
     height:650px;
     padding:80px 60px;
     box-sizing:border-box;
     background:rgba(0,0,0,.5);

	}
    .user
    {
     width:100px;
     height:100px;
     border-radius:50%;
     overflow: hidden;
     position: absolute;
     top:calc(-100px/2);
     left:calc(35%);
    }

    	text-align:center;

    }

::placeholder
{

	color:rgba(255,255,255,.5);
}    


 input[type="submit"]:hover
{
	background:#efed40;
    color:#262626;
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
	.headcolor
	{
		color:white;
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
           
                
                <li><a href="registration.php">REGISTRATION</a></li>
                <li><a href="viewbooking.php">VIEW BOOKING</a>
                <li><a href="feedback.php">FEEDBACK</a>
               <!-- <li><a href="update.php">UPDATE EVENTS</a> -->
                <li><a href="payment.php">PAYMENT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                </li>
        </div>
    </div>
	 
   <div class="container-fluid1">
    <div class="img a ">
  <img src="img/reg2.jpg" width="100%">
        
        

<div class="box">
<form method="POST">

<h2 style="color:white;">REGISTRATION FORM</h2>
	<Table height="350px" cellspacing="100">
		<tr>
			<td class="headcolor">YOUR NAME:</td>
			<td><input type="text" placeholder="Your Name" name="name" class="txtcolor"></td>
		</tr>
		<tr>
	<td class="headcolor">YOUR ID:</td>
	<td><input type="text" placeholder="Your ID" name="id" class="txtcolor"></td>
</tr>
<tr>

	<td class="headcolor">PHONE NO.:</td>
	<td><input type="text" placeholder="Phone No" name="phoneno" class="txtcolor"></td>
</tr>


<tr>
	<td class="headcolor">BOOK YOUR EVENT:</td>
	<td><select numbers="numbers" class="txtcolor" name="events">
	<option value="select">Select</option>
	<option value="birthday">BIRTHDAYS</option>
	<option value="wedding">WEDDINS</option>
	<option value="houseparties">HOUSE PARTIES</option> 
	<option value="officeparty">OFFICE PARTY</option>
	<option value="kidsevent">KIDS EVENT</option>
	
</select>
</td>
</tr>

<tr>
            <td class="headcolor">VENUE:</td>
            <td><input type="text" placeholder="Venue Name" name="venue" class="txtcolor"></td>
        </tr>
        
<tr>

    <td class="headcolor">VENUE TYPE:</td>
    
    <td><select numbers="numbers" class="txtcolor" name="venuetype">
    <option value="select">Select</option>
    <option value="BANQUET HALL">BANQUET HALL</option>
    <option value="WEDDING HALL">WEDDING HALL</option>
    <option value="PARTY LAWN">PARTY LAWN</option>
</select>
</td>   
</tr>

<tr>
            <td class="headcolor">PLACE:</td>
            <td><input type="text" placeholder="Venue Place" name="place" class="txtcolor"></td>
        </tr>



<tr>
	<td class="headcolor">NO.OF PERSONS:</td>
	<td><select numbers="numbers" class="txtcolor" name="persons">
	<option value="select">Select</option>
	<option value="50-100">50-100</option>
	<option value="100-200">100-200</option>
	<option value="200-300">200-300</option> 
	<option value="300-400">300-400</option>
	<option value="400-500">400-500</option>
	<option value="500-600">500-600</option>

</select>
</td>
</tr>

<tr>
	<td class="headcolor">

    DATE/TIME:</td>
    <td><input type="date" placeholder="mm-dd-yy" class="txtcolor" name="date"></td>
</tr>
    <tr><td colspan="2" class="headcolor" name="food">PLEASE CHOOSE YOUR FAVOURITE FOOD</td></tr>

    <tr><td class="headcolor"><input type="radio" name="a" value="VEG">VEG </td></tr>
    <tr><td class="headcolor"><input type="radio" name="a" value="NON VEG">NON VEG</td></tr>
     <tr><td class="headcolor"><input type="radio" name="a" value="BREAKFAST">BREAKFAST </td></tr>
    <tr><td class="headcolor"><input type="radio" name="a" value="LUNCH">LUNCH</td></tr>
     <tr><td class="headcolor"><input type="radio" name="a" value="DINNER">DINNER </td></tr>
    <tr><td class="headcolor"><input type="radio" name="a" value="TEA & SNACKS">TEA & SNACKS</td></tr>
    
<tr>
    <tr><td colspan="2" class="headcolor" name="decoration">DECORATION</td></tr>

    <td class="headcolor">

    LIGHTINGS:</td>
    <td><select numbers="numbers" class="txtcolor" name="lightings">

        <option value="NO">NO</option>
        <option value="NORMAL">NORMAL</option>
        <option value="DELUXE">DELUXE</option>
        <option value="ROYAL">ROYAL</option>

</select>
</td>
</tr>

<tr>
    <td class="headcolor">

    FLOWERS:</td>
    <td><select numbers="numbers" class="txtcolor" name="flowers">

        <option value="NO">NO</option>
        <option value="NORMAL">NORMAL</option>
        <option value="DELUXE">DELUXE</option>
        <option value="ROYAL">ROYAL</option>
        
</select>
</td>
</tr>

<tr>
    <td class="headcolor">

    SEATINGS:</td>
    <td><select numbers="numbers" class="txtcolor" name="seatings">
         <option value="SELECT">SELECT</option>
        <option value="CHAIR">CHAIR</option>
        <option value="CHAIR AND SOFA">CHAIR & SOFA</option>
        <option value="DELUXE">SOFA</option>
                
</select>
</td>
</tr>

<tr>
    <td class="headcolor">
  
    EQUIPMENTS:</td>
    <td><select numbers="numbers" class="txtcolor" name="equipments">
        <option value="NO">NO</option>
        <option value="DJ">DJ</option>
        <option value="STAGE">STAGE</option>
        <option value="MIKE AND SPEAKERS">MIKE AND SPEAKERS</option>
        

</select>
</td>
</tr>

<tr>
    <td class="headcolor">
  
    STATUS:</td>
    <td><select numbers="numbers" class="txtcolor" name="status">
        <option value="SELECT">SELECT</option>
        <option value="PENDING">PENDING</option>
</select>
</td>
</tr>
   
   
   
	<tr><td><input type="submit" name="submit" value="Submit" class="txtcolor"></td></tr>

   
</table>
</form>



       <?php

       include("dbconfig.php");

  if(isset($_POST['submit']))
  { 
    $name=$_POST['name'];
    $id=$_POST['id'];
    $phoneno=$_POST['phoneno'];
    $events=$_POST['events'];
    $venue=$_POST['venue'];
    $venuetype=$_POST['venuetype'];
    $place=$_POST['place'];
    $persons=$_POST['persons'];
    $date=$_POST['date'];
    $food=$_POST['a'];
    $lightings=$_POST['lightings'];
    $flowers=$_POST['flowers'];
    $seatings=$_POST['seatings'];
    $equipments=$_POST['equipments'];
    $status=$_POST['status'];

   
    
   
   

    $q="insert into bookevents(name,id,ph_no,b_event,venue,venuetype,place,no_persons,date,food,lightings,flowers,seatings,equipments,status)values('".$name."','".$id."','".$phoneno."','".$events."','".$venue."','".$venuetype."','".$place."','".$persons."','".$date."','".$food."','".$lightings."','".$flowers."','".$seatings."','".$equipments."','".$status."');";

    $query=mysqli_query($conn,$q);
    
    //header("location:login.php");
      echo "<font color='white'>congratulations you have successfully registered your event</font>";

  }

  ?>

</div>
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
        
      

     	
</body>
</html>