<?php
require('config.php');


$inf=$_GET['id'];


$sql_member="DELETE FROM member WHERE trainer_id=(select trainer_id from trainer where pay_id=(select pay_id from payment where gym_id=(select gym_id from gym where gym_id='$inf')))";
$sql_query_mem=mysqli_query($con,$sql_member);

if ($sql_query_mem) {
	$sql_trainer="DELETE FROM trainer where pay_id=(select pay_id from payment where gym_id=(select gym_id from gym where gym_id='$inf'))";

	$sql_query_trainer=mysqli_query($con,$sql_trainer);
}else{
	echo "not delted";
}



if ($sql_query_trainer) {
	$sql_payment="DELETE FROM payment WHERE gym_id=(select gym_id from gym where gym_id='$inf')";
	$sql_querypayment=mysqli_query($con,$sql_payment);
}else{
	echo "not deleted".mysqli_error($con);
}


if ($sql_querypayment) {
	$sql_query="DELETE FROM gym WHERE gym_id='$inf'";
	$delete=mysqli_query($con,$sql_query);
	if ($delete) {
		header("location:home.php?info=manage_gym");
	}else{
		echo "error".mysqli_error($con);
	}
}else{
	echo "not delete".mysqli_error($con);
}
	
	
	
	
?>