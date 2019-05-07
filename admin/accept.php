<?php 

	if(isset($_COOKIE["admin"]) && !empty($_GET["code"])){
		$code = $_GET["code"];
		include("db.php");
		$ab = mysqli_query($con, "select * from car_details where code = '$code'");
		if($a = mysqli_fetch_array($ab)){
			mysqli_query($con,"update car_details set status = 1 where code = '$code'");
			header("location:pending.php?success=1");
		}
		else{
			header("location:pending.php?err=1");
		}
	}
	else{
		header("location:pending.php?errrr=1");
	}
 ?>