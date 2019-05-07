<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
</head>
<body>
	<?php 
	if(!empty($_COOKIE["admin"])){
		include("db.php");
		$count = 0;
		$ad = mysqli_query($con,"select * from car_details where status = 0");
		while($a = mysqli_fetch_array($ad)){
			$count++;
			?>
			<h1>Car <?=$count?></h1>
			<img src="../upload/<?=$a[8]?>.jpg" alt="" style="width:200px; height : 150px">
			<table class="table table-responsive table-hover">
				<tr>
					<th>Date Upload</th>
					<th>Location</th>
					<th>KM Driven</th>
					<th>Condition</th>
					<th>Expected Price</th>
					<th>Milage (KMPL)</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><?=$a[1]?></td>
					<td><?=$a[2]?></td>
					<td><?=$a[3]?></td>
					<td><?=$a[4]?></td>
					<td><?=$a[6]?></td>
					<td><?=$a[9]?></td>
					<td><?=$a[10]?></td>
				</tr>
			</table>
			<a href="accept.php?code=<?=$a[8]?>" class="btn btn-success">Publish Online</a>
			<br><br>
			<?php
		}
	}
	else{
		header("location:admin.php");
	}
 ?>
 								
</body>
</html>