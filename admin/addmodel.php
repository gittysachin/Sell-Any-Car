<?php 
	if(!empty($_REQUEST["car_model"])){
		$car_company = $_REQUEST["car_company"];
		$car_model = $_REQUEST["car_model"];
		$car_max = $_REQUEST["car_max"];
		$car_engine = $_REQUEST["car_engine"];
		$car_type = $_REQUEST["car_type"];
		$car_bhp = $_REQUEST["car_bhp"];
		include("db.php");
		$ab = mysqli_query($con,"select * from car_models where carcode IN (select carcode from cars where car_company = '$car_company') AND model = '$car_model'");
		$a = mysqli_fetch_array($ab);
		if(!$a[0]){
			$arra=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',1,2,3,4,5,6,7,8,9,0);

			$ba=array_rand($arra,8);
			$c="";
			for($i=0;$i<sizeof($ba);$i++){
				$c=$c.$arra[$ba[$i]];
			}
			$rs = mysqli_query($con, "select * from cars where car_company = '$car_company'");
			$r = mysqli_fetch_array($rs);
			$pq=mysqli_query($con,"insert into car_models values('$r[1]','$car_model','$car_type',$car_engine,$car_bhp,$car_max,'$c',1)");
			echo "Model inserted";
		}
		else {
			echo "Model Already Exist";
		}
	}
 ?>