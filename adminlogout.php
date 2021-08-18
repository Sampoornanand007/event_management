<?php
include("dbconfig.php");

session_start();
if($_SESSION['user']=="")
{
	header("location:index.php");
}
else
{
	$name=$_SESSION['user'];
}




if(isset($_POST['logout']))


{

 sesssion_unset();
 session_destroy();
 

  header("location:index.php");
    echo "<script>location.replace('index.php')</script>";


}
?>


