<!DOCTYPE html>
<html lang="en">
<head>
<title>Properties</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/properties.css">
<link rel="stylesheet" type="text/css" href="styles/properties_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/property.css">
<link rel="stylesheet" type="text/css" href="styles/property_responsive.css">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var totalcount = $("#totalcount").val();
		if(totalcount <= 1){
			$("#total_count").html(totalcount + " Car found");
		}
		else {
			$("#total_count").html(totalcount + " Cars found");
		}
	});
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
								<li class="active"><a href="cars.php">Cars</a></li>
								<li><a href="sell.php">Sell</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<img src="images/phone.png" alt=""><span>652-345 3222 11</span>
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
				<li class="menu_item"><a href="index.php">Home</a></li>
				<li class="menu_item"><a href="about.html">About us</a></li>
				<li class="menu_item"><a href="#">Speakers</a></li>
				<li class="menu_item"><a href="#">Tickets</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1471479917193-f00955256257?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=277e06c05754d2c22a90ea8c242a82df&auto=format&fit=crop&w=1448&q=80" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Search results</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>Search Results</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select">
											<option disabled selected>Vehicle Type</option>
											<option>Luxury</option>
											<option>Suv</option>
											<option>Pickup Trucks</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Select Budget</option>
											<option>1 Lakh - 5 Lakh</option>
											<option>5 Lakh - 10 Lakh</option>
											<option>10 Lakh - 15 Lakh</option>
											<option>15 Lakh - 20 Lakh</option>
											<option>20 Lakh - 30 Lakh</option>
											<option>30 Lakh - 40 Lakh</option>
										</select>
									</div>
									<div>
										<select name="company" class="search_form_select companies">
											<option disabled selected>Company</option>
											<option value="Renault">Renault</option>
											<option value="Suzuki">Suzuki</option>
											<option value="BMW">BMW</option>
											<option value="Jaguar">Jaguar</option>
											<option value="Jeep">Jeep</option>
											<option value="Audi">Audi</option>
											<option value="Volkswagen">Volkswagen</option>
										</select>
									</div>
									<div id="response">
										<select class="search_form_select" >
											<option disabled selected>First Select Company</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>Engine Capicity</option>
											<option>500cc - 1000cc</option>
											<option>1000cc - 1500cc</option>
											<option>1500cc - 2000cc</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Properties -->
		
				<?php 
				include("db.php");
				if(!empty($_GET["carcom"])){
					?>
						<div class="properties">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="section_title" id="total_count"></div>
										<div class="section_subtitle">Search your dream car</div>
									</div>
								</div>
								<div class="row properties_row">
					<?php
					$carcom = $_GET["carcom"];
					$ab = mysqli_query($con,"select * from car_models where carcode = '$carcom'");
					$count = 0;
					while($a = mysqli_fetch_array($ab)){
						$pq = mysqli_query($con,"select * from car_details where modelcode = '$a[6]'");
						while($p = mysqli_fetch_array($pq)){
							if($p[11]==1){
								$count++;
							$rs = mysqli_query($con, "select * from cars where carcode = '$carcom'");
							$r = mysqli_fetch_array($rs);
							?>
							
								<a href="cars.php?carcode=<?=$p[8]?>">
									<div class="col-xl-4 col-lg-6 property_col">
										<div class="property" style="padding-bottom : 0">
											<div class="property_image">
												<img src="upload/<?=$p[8]?>.jpg" alt="">
												<div class="tag_featured property_tag"><a href="#">Featured</a></div>
												<!-- <div class="tag_offer property_tag"><a href="#">Offer</a></div>
												<div class="tag_new property_tag"><a href="#">New</a></div> -->
											</div>
											<div class="property_body text-center">
												<div class="property_location"><?=$r[0]?></div>
												<div class="property_title"><a href="property.html"><?=$a[1]?></a></div>
												<div class="property_price">Rs. <?=$p[6]?></div>
											</div>
											<div class="property_footer d-flex flex-row align-items-center justify-content-start">
												<div style="margin-left: 25px;"><div class="property_icon"><img src="images/milage.png" alt=""></div><span><?=$p[9]?> kmpl</span></div>
												<div><div class="property_icon"><img src="images/engine.png" alt=""></div><span><?=$a[3]?> cc</span></div>
												<div><div class="property_icon"><img src="images/power.png" alt=""></div><span><?=$a[4]?> BHP</span></div>
											</div>
										</div>
									</div>
								</a>
							<?php
							}
						}
					}
					?>
								<input type="hidden" name="totalcount" value="<?=$count?>" id="totalcount">
				

									</div>
								</div>
							</div>
					<?php
				}
				else if(!empty($_GET["carcode"])){
					$carcode = $_GET["carcode"];
					$ab = mysqli_query($con,"select * from car_details where code = '$carcode'");
					$count = 0;
					if($a = mysqli_fetch_array($ab)){
						$pq = mysqli_query($con,"select * from car_models where modelcode = '$a[0]'");
						if($p = mysqli_fetch_array($pq)){
							if($a[11]==1){
								$count++;
							$rs = mysqli_query($con, "select * from cars where carcode = '$p[0]'");
							$r = mysqli_fetch_array($rs);
							$td = mysqli_query($con, "select * from users where email = '$a[7]'");
							$t = mysqli_fetch_array($td);
							?>
								<!-- <a href="cars.php?carcode=<?=$a[8]?>">
									<div class="col-xl-4 col-lg-6 property_col">
										<div class="property">
											<div class="property_image">
												<img src="upload/<?=$a[8]?>.jpg" alt="">
												<div class="tag_featured property_tag"><a href="#">Featured</a></div>
											</div>
											<div class="property_body text-center">
												<div class="property_location"><?=$r[0]?></div>
												<div class="property_title"><a href="property.html"><?=$p[1]?></a></div>
												<div class="property_price">Rs. <?=$a[6]?></div>
											</div>
											<div class="property_footer d-flex flex-row align-items-center justify-content-start">
												<div><div class="property_icon"><img src="images/milage.png" alt=""></div><span><?=$a[9]?> kmpl</span></div>
												<div><div class="property_icon"><img src="images/engine.png" alt=""></div><span><?=$p[3]?> cc</span></div>
												<div><div class="property_icon"><img src="images/power.png" alt=""></div><span><?=$p[4]?> BHP</span></div>
											</div>
										</div>
									</div>
								</a> -->
								<div class="property" style="padding-bottom:0px;">
									<div class="container">
										<div class="row">
											<div class="col-lg-4">
												<div class="property_image" style="margin-top : 83px">
													<img src="upload/<?=$a[8]?>.jpg" alt="">
													<div class="tag_featured property_tag"><a href="#">Featured</a></div>
												</div>
												<div class="sidebar_realtor" style="margin-top : 5px; padding-bottom : 0;">
													<!-- <div class="sidebar_realtor_image"><img src="images/sidebar_realtor.jpg" alt=""></div> -->
													<div class="sidebar_realtor_body text-center" style="padding-bottom : 0;">
														<div class="sidebar_realtor_title"><a href="#"><?=$p[1]?></a></div>
														<div class="sidebar_realtor_subtitle"><?=$r[0]?></div>
														<!-- <div class="sidebar_realtor_phone"><span>call us: </span><?=$t[3]?></div> -->
														<div class="property_price">Rs. <?=$a[6]?></div>
														<div class="property_footer d-flex flex-row align-items-center justify-content-start" style="margin-top : 45px;  background :#3f6fce;">
															<div style="margin-left: 25px;"><div class="property_icon"><img src="images/milage.png" alt=""></div><span><?=$a[9]?> kmpl</span></div>
															<div><div class="property_icon"><img src="images/engine.png" alt=""></div><span><?=$p[3]?> cc</span></div>
															<div><div class="property_icon"><img src="images/power.png" alt=""></div><span><?=$p[4]?> BHP</span></div>
														</div>
													</div>
												</div>
												<div class="sidebar_realtor" style="margin-top : 55px;">
													<!-- <div class="sidebar_realtor_image"><img src="images/sidebar_realtor.jpg" alt=""></div> -->
													<div class="sidebar_realtor_body text-center">
														<div class="sidebar_realtor_title"><a href="#"><?=$t[0]?></a></div>
														<div class="sidebar_realtor_subtitle"><?=$t[4]?></div>
														<div class="sidebar_realtor_phone"><span></span><?=$a[2]?></div>
														<div class="sidebar_realtor_phone"><span>call us: </span><?=$t[3]?></div>
														<div class="realtor_link" style="width:111px;" ><a href="#">Buy +</a></div>
													</div>
												</div>
											</div>
											<div class="col-lg-7 offset-lg-1">
												<div class="property_content">
													<div class="property_icons">
														<div class="property_title">Extra Facilities</div>
														<div class="property_text property_text_1">
															<p>All travellers flying from UK airports this summer are reminded to take note of current baggage restrictions and to pack their hand luggage carefully.</p>
														</div>
														<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">

															<!-- Property Room Item -->
															<div class="property_room">
																<div class="property_room_title">Seats</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/color/52/000000/waiting-room.png"></div>
																	<div class="room_num">4</div>
																</div>
															</div>

															<!-- Property Room Item -->
															<div class="property_room">
																<div class="property_room_title">Cameras</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/color/52/000000/wallmount-camera.png"></div>
																	<div class="room_num">3</div>
																</div>
															</div>

															<!-- Property Room Item -->
															<div class="property_room">
																<div class="property_room_title">Console</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/clouds/64/000000/tablet-zoom.png"></div>
																	<div class="room_num">2</div>
																</div>
															</div>

															<!-- Property Room Item -->
															<div class="property_room">
																<div class="property_room_title">Tests</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/nolan/52/000000/todo-list.png"></div>
																	<div class="room_num">71</div>
																</div>
															</div>

															<div class="property_room">
																<div class="property_room_title">Seller Verified</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/dusk/52/000000/checked-user-male.png"></div>
																	<div class="room_num">OK</div>
																</div>
															</div>


															<!-- Property Room Item -->
															<div class="property_room">
																<div class="property_room_title">Ready</div>
																<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
																	<div class="room_icon"><img src="https://img.icons8.com/color/52/000000/key-exchange.png"></div>
																	<div class="room_num"></div>
																</div>
															</div>

														</div>
													</div>

													<!-- Description -->

													<div class="property_description">
														<div class="property_title">Car Condition (At Present)</div>
														<div class="property_text property_text_2">
															<p><?=$a[4]?></p>
														</div>
													</div>

													<div class="property_description">
														<div class="property_title">Description (with the reason of selling)</div>
														<div class="property_text property_text_2">
															<p><?=$a[10]?></p>
														</div>
													</div>

													<!-- Additional Details -->

													<div class="additional_details">
														<div class="property_title">Additional Details</div>
														<div class="details_container">
															<ul>
																<li><span>Cylinder Configuration : </span> V</li>
																<li><span>Engine Location : </span> Front, Longitudinal</li>
																<li><span>Drivetrain : </span> RWD (Rear Wheel Drive)</li>
																<li><span>Airbags : </span> Driver frontal airbag, Front passenger frontal airbag</li>
																<li><span>Seat Height Adjustment : </span> Electric Adjustment</li>
															</ul>
														</div>
													</div>

													<!-- <div class="property_map">
														<div class="property_title">Property on map</div>
														<div class="property_map_container">

															<div id="google_map" class="google_map">
																<div class="map_container">
																	<div id="map"></div>
																</div>
															</div>

														</div>
													</div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php
							}
						}
					}
				}
				else {
					?>
						<div class="properties">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="section_title" id="total_count"></div>
										<div class="section_subtitle">Search your dream car</div>
									</div>
								</div>
								<div class="row properties_row">
					<?php
					$ab = mysqli_query($con,"select * from car_details");
					$count = 0;
					while($a = mysqli_fetch_array($ab)){
						$pq = mysqli_query($con,"select * from car_models where modelcode = '$a[0]'");
						if($p = mysqli_fetch_array($pq)){
							if($a[11]==1){
								$rs = mysqli_query($con, "select * from cars where carcode = '$p[0]'");
							if($r = mysqli_fetch_array($rs)){
								$count++;
							?>
							
								<a href="cars.php?carcode=<?=$a[8]?>">
									<div class="col-xl-4 col-lg-6 property_col">
										<div class="property" style="padding-bottom : 0px;">
											<div class="property_image">
												<img src="upload/<?=$a[8]?>.jpg" alt="">
												<div class="tag_featured property_tag"><a href="#">Featured</a></div>
												<!-- <div class="tag_offer property_tag"><a href="#">Offer</a></div>
												<div class="tag_new property_tag"><a href="#">New</a></div> -->
											</div>
											<div class="property_body text-center">
												<div class="property_location"><?=$r[0]?></div>
												<div class="property_title"><a href="property.html"><?=$p[1]?></a></div>
												<div class="property_price">Rs. <?=$a[6]?></div>
											</div>
											<div class="property_footer d-flex flex-row align-items-center justify-content-start">
												<div style="margin-left: 25px;"><div class="property_icon"><img src="images/milage.png" alt=""></div><span><?=$a[9]?> kmpl</span></div>
												<div><div class="property_icon"><img src="images/engine.png" alt=""></div><span><?=$p[3]?> cc</span></div>
												<div><div class="property_icon"><img src="images/power.png" alt=""></div><span><?=$p[4]?> BHP</span></div>
											</div>
										</div>
									</div>
								</a>
							<?php
							}
							}
						}
					}
					?>

								<input type="hidden" name="totalcount" value="<?=$count?>" id="totalcount">
				

								</div>
								</div>
							</div>
					<?php
				}
				 ?>
				 	
			<!-- <div class="row">
				<div class="col">
					<div class="pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
							<li><a href="#">04.</a></li>
						</ul>
					</div>
				</div>
			</div> -->

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="newsletter_title_container">
							<div class="newsletter_title">Are you buying or selling?</div>
							<div class="newsletter_subtitle">Search your dream car</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your e-mail address" required="required">
								<button class="newsletter_button">subscribe now</button>
							</form>
						</div>
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
									<li><a href="index.php">Home</a></li>
									<li><a href="#">About us</a></li>
									<li><a href="properties.html">Properties</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-auto"><span>call us: </span>652 345 3222 11</div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/property.js"></script>
</body>
</html>