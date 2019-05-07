<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
	<script type="text/javascript">
		function updatedcarsdisplay(){
			$.post("selectcar.php", function(data){
					$("#allcars").html(data);
				})
		}
		$(document).ready(function(){	
			$("#carcomp").on("click",function(){
				var carcom = $("#carcom").val();
				var file_data = $('#companyphoto').FILES[0];   
		        var form_data = new FormData();                  
		        form_data.append('file', file_data);
		        $.ajax({
		            url: "addcar.php",
		            type: "POST",
		            data: {form_data, car_company : carcom},
		            contentType: false,
		            cache: false,
		            processData:false,
		            success: function(data){
		                $("#msg").html(data);
						updatedcarsdisplay();
		            }
		        });
			});
		});
		function updatedmodelsdisplay(){
			var car = $(".selectcar").val();
				$.post("carmodel.php",{car_company : car},function(data){
					$("#car_models").html(data);
				});
		}
		$(document).ready(function(){	
			$("#carmode").on("click",function(){
				var carmod = $("#carmod").val();
				var carcom = $("#car").val();
				var carmax = $("#carmax").val();
				var carengine = $("#carengine").val();
				var cartype = $("#cartype").val();
				var carbhp = $("#carbhp").val();
				$.post("addmodel.php",{car_model : carmod, car_company : carcom, car_max : carmax, car_engine : carengine, car_type : cartype, car_bhp : carbhp},function(data){
					$("#mesg").html(data);
					updatedmodelsdisplay();
				});
			});

		});
		$(document).ready(function(){
		$(".selectcar").change(function(){
				var car = $(".selectcar").val();
				$.post("carmodel.php",{car_company : car},function(data){
					$("#car_models").html(data);
				});
				//alert(car);
		});
	});
	var loadFile = function(event) {
    	var output = document.getElementById("uploadPreview");
    	output.src = URL.createObjectURL(event.target.files[0]);
  	};
	</script>
</head>
<body style="background : #f4f5f7; padding:0; margin:0;">
	<header style="padding : 7px;margin-left: 2%; margin-right: 2%; background :white; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);" class="row">
		<div style=" display : inline-block; padding : 0; width : 30%"><img src="img/logo.png" style="margin-left: 20px; padding : 10px; padding-left : 5px; width : 270px; height: 60px">ADMIN
		
		</div><div style="display : inline-block"><?php if(isset($_COOKIE["admin"])){echo "<li><a href='logout.php'>Logout</a></li>";} ?></div>
	</header>
	<section style="padding : 7px; margin-top : 7px; margin-left: 2%; margin-right: 2%; background :white; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2); text-align: center;">
	<?php 
		if(isset($_COOKIE["admin"])){
	 ?>
	 <div id="addcar" style="width : 50%;padding : 10px">
	 	<h1>Add Car</h1>
	 	<form method="post" enctype="multipart/form-data" action="addcar.php">
	 		<input id="carcom" type="text" placeholder="Car Company" name="car_company" class="form-control" required="required">
	 		<label for="photo">Photo</label><br><input type="file" name="companyphoto" accept="image/*" onchange="loadFile(event)" id="companyphoto" required="required">                                       
				<img id="uploadPreview" src="#" style="width: 150px; height: 150px;">
								
	 		<button id="carcomp" class="btn btn-success" style="margin-left : 30px">Add Car</button>
	 	</form>
	 	<div id="msg">
	 		<?php 
	 			if(!empty($_GET["err"])){
	 				echo "Error while uploading image";
	 			}
	 			else if(!empty($_GET["inserted"])){
	 				echo "Company inserted";
	 			}
	 			else if(!empty($_GET["already"])){
	 				echo "Already Exist";
	 			}
	 		 ?>
	 	</div>
	 </div>
	 <div><a href="pending.php" class="btn btn-primary">Pending Cars</a></div>
	 <div><a href="cars.php" class="btn btn-primary">Accepted Cars</a></div>
	 <div><a href="users.php" class="btn btn-primary">Users(Buyers/Sellers)</a></div>
	 <hr>
	 <div style="padding : 10px">
	 	<label for="car">Select Car</label>
	 	<div id="allcars">
	 		<select class="selectcar" id="car" style="width : 20%;">
				<option value="">Select Car</option>
				<?php
					include("db.php");
					$rs=mysqli_query($con,"select * from cars");
					while($r=mysqli_fetch_array($rs)){
						echo "<option value='$r[0]'>$r[0]</option>";
					}
				?>
			</select>
	 	</div>
	 	<div class="row">
	 		<div style="width : 30%;float : left">
	 		<h1 style="color:red">Add Model</h1>
	 	
	 	<div id="addmodel">
		 	<div id="mesg"></div>
	 		<div>
	 			<br>
		 		<input id="carmod" type="text" placeholder="Car Model" name="car_model" class="form-control">
		 		<select id="cartype" required name="car_type" class="form-control"> 
		 			<option disabled selected val="">Select Type</option>
		 			<option value="Luxury">Luxury</option>
		 			<option value="SUV">SUV</option>
		 			<option value="Pickup Trucks">Pickup Trucks</option>
		 		</select>
		 		<input id="carengine" type="number" name="car_engine" placeholder="Engine Capacity (in CC)" class="form-control">
		 		<input id="carbhp" type="number" name="car_bhp" placeholder="Brake Horse Power (BHP)" class="form-control">
		 		<input id="carmax" type="number" name="car_max" placeholder ="Max Price (in INR)" class="form-control">
		 		<button id="carmode" class="btn btn-success">Add Model</button>
		 	</div>
	 	</div>
	 	</div>
	 	
	 	<div id="car_models" style="width : 70%;float : right">
	 		
	 	</div>
	 	</div>
	 </div>
	 <?php
	 	}
	 else{
	 ?>
		<form action="check.php" method="post" style="width : 30% ; padding : 15px">
			<input type="email" placeholder="your@email.here" name="email"  class="form-control" required><br>
			<input type="password" class="form-control" placeholder="k@chh@p@p@d p@kk@p@pad" name="password" required><br>
			<input type="submit" name="submit">
		</form>

	<?php 
		}
	 ?>
	</section>
</body>
</html>