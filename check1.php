<?php 
	if(!isset($_POST["email"])){
		header("location:sell.php?err1=1");
	}
	else {
		include("db.php");
		$email = $_POST["email"];
		$pass= $_POST["password"];
		$rs=mysqli_query($con,"select * from users where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($r[2]==$pass){
				setcookie("user",$email,time()+36000);
				header("location:sell.php");
			}
			else{
				header("location:sell.php?passerr=1");
			}
		}
		else{
			header("location:sell.php?nouser=1");
		}
	}
 ?>