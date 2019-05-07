<?php 
	$coun = 0;  
	if(!empty($_POST["model"]) && !empty($_POST["date"]) && !empty($_POST["km_driven"]) && !empty($_POST["location"]) && !empty($_POST["condition"]) && !empty($_POST["expected_price"]) && !empty($_POST["milage"]) && !empty($_COOKIE["user"]) && !empty($_POST["description"])){
		$description = $_POST["description"];
		$model = $_POST["model"];
		$date = $_POST["date"];
		$km_driven = $_POST["km_driven"];
		$location = $_POST["location"];
		$condition = $_POST["condition"];
		$expected_price = $_POST["expected_price"];
		$milage = $_POST["milage"];
		$email = $_COOKIE["user"];
		$arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);

				$ba=array_rand($arra,8);
				$c="";
				for($i=0;$i<sizeof($ba);$i++){
					$c=$c.$arra[$ba[$i]];
				}
		$img=$c.".jpg";
		$target = "upload/".$img;
		$size=($_FILES['photo']['size']);
		include("db.php");
		$ab = mysqli_query($con,"select * from car_models where modelcode='$model'");
		if($a = mysqli_fetch_array($ab)){
			if($a[5] > $expected_price){
				if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
					$rs = mysqli_query($con,"insert into car_details values('$model','$date','$location',$km_driven,'$condition','$img',$expected_price,'$email','$c',$milage,'$description',0)");
					$coun = 1;
				}
				else {
					echo "file not uploaded";
				}
			}
			else{
				header("location:sell.php?price=1");
			}
		}
		else{
			header("location:sell.php?failed=1");
		}
	}
	else {
		echo "Something went wrong???";
	}
	if($coun ==1){
		header("location:sell.php?submit=1");
	}
 ?>