<?php 
	if(isset($_POST["email"])&&isset($_POST["password"])){
		$email = $_POST["email"];
		$password=$_POST["password"];
		include("db.php");
		$pq=mysqli_query($con,"select * from admin");
		if($p=mysqli_fetch_array($pq)){
			if($email==$p[0]){
				if($password==$p[1]){
					header("location:admin.php?success=1");
					setcookie("admin",$email,time()+3600);
				}
				else{
					header("location:admin.php?wrongpass=1");
				}
			}
			else{
				header("location:admin.php?record_not_found=1");
			}
		}
	}
	else{
		header("location:admin.php?something_went_worng=1");
	}
 ?>