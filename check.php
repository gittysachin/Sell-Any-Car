<?php 
	if(!isset($_POST["email"])){
		header("location:sell.php?err=1");
	}
	else {
		include("db.php");
		$email = $_POST["email"];
		$pass= $_POST["password"];
		$count=0;
		$rs=mysqli_query($con,"select * from users where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($r[1]==$email){
				$count++;
				header("location:sell.php?exist=1");
			}
		}
		if($count==0){
			$name = $_POST["name"];
				$mobile = $_POST["mobile"];
				$bio = $_POST["bio"];
				$occu = $_POST["occupation"];
				mysqli_query($con,"insert into users values('$name','$email','$pass','$mobile','$occu','$bio',1)");
				setcookie("user",$email,time()+36000);
				header("location:sell.php");
		}
	}
 ?>