<?php
require('config.php');


$inf=$_GET['id'];


$sql_mem="DELETE FROM member WHERE trainer_id=(select trainer_id from trainer where trainer_id='$inf')";
$sql_query_mem=mysqli_query($con,$sql_mem);
if ($sql_query_mem) {


	$sql_query="DELETE FROM trainer WHERE trainer_id='$inf'";
	$delete=mysqli_query($con,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_trainer");
	}else{
		echo "error".mysqli_error($con);
	}
	
	
}else{
	echo "Not deleted";
}
	
	

?>