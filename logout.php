<?php

{

 session_unset();
 session_destroy();


  header("location:index.php");
      echo "<script>location.replace('index.php')</script>";

}
?>


