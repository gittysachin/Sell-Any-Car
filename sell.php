<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
 $(document).ready(function(){
    $("#cars").change(function(){
        var selectedcompany = $("#cars option:selected").val();
        $.post("selectmodel.php",{company : selectedcompany},function(data){
          $("#response").html(data);
        });
    });
});

var loadFile = function(event) {
    var output = document.getElementById("uploadPreview");
    output.src = URL.createObjectURL(event.target.files[0]);
  };

</script>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#"><img src="images/logo.png" alt=""></a>
						</div>
						<nav class="main_nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="cars.php">Cars</a></li>
								<li class="active"><a href="sell.php">Sell</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<img src="images/phone.png" alt=""><span>(+91) 83858-91967</span>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="about.html">About us</a></li>
				<li class="menu_item"><a href="#">Speakers</a></li>
				<li class="menu_item"><a href="#">Tickets</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>(+91) 83858 91967</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Sell</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Sell</li>
									<?php if(isset($_COOKIE["user"])){ echo "<li><a href='logout.php'>Logout</a></li>";} ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="contact">
		<div class="container">
			<div class="row">
				<!-- Contact Info -->
				<?php 
					if(isset($_COOKIE["user"])){}
					else {
						?>
						<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Sell your car with us</div>
						<div class="section_subtitle">Bye car</div>
						<div class="contact_info_text"><p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget.</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
								<h3>Our details</h3>
								<li>
									<div>Address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 93424</div>
								</li>
								<li>
									<div>Phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>Email:</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
						<?php
					}
				 ?>

				<!-- Contact Form -->
				<div <?php if(isset($_COOKIE["user"])){echo "class='col-lg-8'";} ?>>
					<div class="contact_form_container">
						<?php 
							if(isset($_COOKIE["user"])){
								?>

				<?php 
					if(isset($_GET["submit"])){
						echo "Your car has been submitted for review. It will be live soon if it gets accepted."."<br>";
					}
					else if(isset($_GET["price"])){
						echo "Car Price is more than Max-Price"."<br>";
					}
				 ?>
						<form method="post" enctype="multipart/form-data" action="submitcar.php" class="contact_form" id="contact_form" runat="server">
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<select id="cars" class="contact_input" name="car">
										<option selected disabled value="">Select Car Company</option>
										<?php
										include("db.php");
											$ty = mysqli_query($con, "select * from cars");
											while($t = mysqli_fetch_array($ty)){
												?>
												<option value="<?=$t[1]?>"><?php echo $t[0]; ?></option>
												<?php
											}
										 ?>
									</select>

								</div>
								<div   class="col-lg-6 contact_name_col">
										<select class="contact_input" name="model" id="response">
											<option disabled selected>First Select Company</option>
										</select>
								</div>
					<br>			<!-- Email -->
								<div class="col-lg-6">
									<br>
									<input type="date" name="date" class="contact_input" placeholder="Purchase Date" required="required">
								</div>
								<div class="col-lg-6">
									<br>
									<input type="number" name="km_driven" class="contact_input" placeholder="KM Driven" required="required">
								</div>
							</div>
							<div><input type="text" class="contact_input" name="location" placeholder="Location"></div>
							<div><textarea class="contact_textarea contact_input" name="condition" placeholder="Car Condition (At Present)" required="required"></textarea></div>
							<div><textarea class="contact_textarea contact_input" name="description" placeholder="Description (with the reason of selling)" required="required"></textarea></div>
							<div><label for="photo">Photo</label><br><input type="file" name="photo" accept="image/*" onchange="loadFile(event)" id="photo" required="required">
								<img id="uploadPreview" src="#" style="width: 150px; height: 100px;">
								</div>
								<div><input type="number" name="milage" placeholder="Current Milage (KMPL)" class="contact_input"></div>
								<div><input type="number" name="expected_price" placeholder="Expected Price (INR)" class="contact_input"></div>
							
							<button class="contact_button button">Submit</button>
						</form>
								<?php
							}
							else if(isset($_GET["signin"])){
								?>
						<form action="check1.php" method="post" class="contact_form" id="contact_form">
							<div><input type="email" name="email" required class="contact_input" placeholder="E-mail"></div>
							<div><input type="password" name="password" class="contact_input" placeholder="Your Password Here" required></div>
							<button class="contact_button button" type="submit">Sign In</button>
						</form>
						
							
							<?php
							}
							else {
								?>
								<form action="check.php" method="post" class="contact_form" id="contact_form">
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<input name="name" type="text" class="contact_input" placeholder="Name" required="required">
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input name="email" type="email" class="contact_input" placeholder="E-mail" required="required">
								</div>
							</div>
							<div><input name="password" type="password" required placeholder="Your Password Here" class="contact_input"></div>
							<div><input name="mobile" type="text" required class="contact_input" placeholder="Mobile Number"></div>
							<div><input name="occupation" type="text" required class="contact_input" placeholder="Your Occupation"></div>
							<div><textarea name="bio" required class="contact_textarea contact_input" placeholder="Tell us about yourself" required="required"></textarea></div>
							<button type="submit" class="contact_button button">Sign Up</button>
						</form>

							<br><br>Already have an Account?<br>
							<button class="contact_button button"><a href="sell.php?signin=1">Login</a></button>
								<?php
							}
						 ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="footer_logo"><a href="#"><img src="images/logo_large.png" alt=""></a></div>
					</div>
					<div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
						<div class="footer_title">Latest Cars</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="footer_about_text">Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curab itur ornare nisl at sagittis cursus.</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img width =86 height = 69 src="images/property_3.jpg" alt=""></div></div>
							<div class="footer_latest_content">
								<div class="footer_latest_location">Mercedes</div>
								<div class="footer_latest_name"><a href="#">X500-3l</a></div>
								<div class="footer_latest_price">Rs. 13,28,999</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img width =86 height = 69 src="images/property_4.jpg" alt=""></div></div>
							<div class="footer_latest_content">
								<div class="footer_latest_location">BMW</div>
								<div class="footer_latest_name"><a href="#">Model Roaster</a></div>
								<div class="footer_latest_price">Rs. 13,28,999</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 footer_col">
						<div class="footer_latest d-flex flex-row align-items-start justify-content-start">
							<div><div class="footer_latest_image"><img width =86 height = 69 src="images/property_2.jpg" alt=""></div></div>
							<div class="footer_latest_content">
								<div class="footer_latest_location">Suzuki</div>
								<div class="footer_latest_name"><a href="#">Dzire</a></div>
								<div class="footer_latest_price">Rs. 13,28,999</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
							<div class="footer_nav">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="Cars.html">Cars</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-auto"><span>call us: </span>(+91) 83858 91967</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>