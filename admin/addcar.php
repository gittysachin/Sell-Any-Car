<?php 
	if(!empty($_REQUEST["car_company"])){
		$car_company =$_REQUEST["car_company"];
		$img = $car_company.".jpg";
		$target = "carco-img/".$img;
		include("db.php");
		$ab = mysqli_query($con,"select * from cars where car_company='$car_company'");
		$a = mysqli_fetch_array($ab);
		if(!$a[0]){
			$arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);

			$ba=array_rand($arra,8);
			$c="";
			for($i=0;$i<sizeof($ba);$i++){
				$c=$c.$arra[$ba[$i]];
			}
			$pic = ($_FILES['companyphoto']['name']);
			if(move_uploaded_file($_FILES['companyphoto']['tmp_name'], $target)){
				$pq=mysqli_query($con,"insert into cars values('$car_company','$c','$img')");
				header("location:admin.php?inserted=1");
			}
			else {
				header("location:admin.php?err=1");
			}
		}
		else {
			header("location:admin.php?already=1");
		}
	}
	else{
		header("location:admin.php?something_wrong=1");
	}
 ?>