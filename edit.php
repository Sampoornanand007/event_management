<?php
//Database Connection
include("dbconfig.php");
//Get Id from Dtabase
if(isset($_GET['edit_id'])){
	$sql ="SELECT * FROM bookevents where id =" .$_GET['edit_id'];
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
	$status =$_POST['status'];
	$update ="UPDATE  bookevents SET status ='$status' WHERE id=". $_GET['edit_id'];
	$up =mysqli_query($conn, $update);
	if(!isset($sql)){
		die("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: viewbooking.php");
	}
}
?>
<!--Create Edit Form-->
<!doctype html>
<html>
<body> 
<form method="post">
<h1>EDIT STATUS</h1>
<label>Status:</label><input type="text" name="status" placeholder="status" value="<?php echo $row['status']; ?>"><br/><br/>
<button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
<a href="viewbooking.php"><button type="button" value="button">Cancel</button></a>
</form>
<!-- Alert for Updating -->
<script>
function update(){
	var x;
	if(confirm("Updated data Successfully") == true){
		x="update";
	}
}
</script>
</body>
</html>
	
</body>
