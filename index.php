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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
 $(document).ready(function(){
    $("select.companies").change(function(){
        var selectedcompany = $(".companies option:selected").val();
        $.post("selectedcompany.php",{company : selectedcompany},function(data){
          $("#response").html(data);
        });
    });
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="cars.php">Cars</a></li>
								<li><a href="sell.php">Sell</a></li>
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

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">super offer</div>
										<div class="home_title">Great Feature Car</div>
										<div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<div class="home_details_image"><img src="images/milage.png"  alt=""></div>
													<span> 19.87 kmpl</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/engine.png" alt=""></div>
													<span> 1498 cc</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/power.png" alt=""></div>
													<span> 108 BHP</span>
												</li>
											</ul>
										</div>
										<div class="home_price">Rs. 15,45,999</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">super offer</div>
										<div class="home_title">Great Feature Car</div>
										<div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<div class="home_details_image"><img src="images/milage.png" alt=""></div>
													<span> 19.87 kmpl</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/engine.png" alt=""></div>
													<span> 1498 cc</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/power.png" alt=""></div>
													<span> 108 BHP</span>
												</li>
											</ul>
										</div>
										<div class="home_price">Rs. 15,45,999</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">super offer</div>
										<div class="home_title">Great Feature Car</div>
										<div class="home_details">
											<ul class="home_details_list d-flex flex-row align-items-center justify-content-start">
												<li>
													<div class="home_details_image"><img src="images/milage.png" alt=""></div>
													<span> 19.87 kmpl</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/engine.png" alt=""></div>
													<span> 1498 cc</span>
												</li>
												<li>
													<div class="home_details_image"><img src="images/power.png" alt=""></div>
													<span> 108 BHP</span>
												</li>
											</ul>
										</div>
										<div class="home_price">Rs. 15,45,999</div>
									</div>
								</div>
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
							<form action="search.php" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select" required>
											<option disabled selected>Vehicle Type</option>
											<option>Luxury</option>
											<option>Suv</option>
											<option>Pickup Trucks</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" required>
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
										<select name="company" class="search_form_select companies" required>
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
										<select class="search_form_select" required>
											<option disabled selected>First Select Company</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" required>
											<option disabled selected>Engine Capicity</option>
											<option>500cc - 1000cc</option>
											<option>1000cc - 1500cc</option>
											<option>1500cc - 2000cc</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto" type="submit" value="submit">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Recent -->

	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Recent Cars</div>
					<div class="section_subtitle">Search your dream car</div>
				</div>
			</div>
			<div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="images/property_1.jpg" alt="">
											<div class="tag_featured property_tag"><a href="#">Featured</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Renault</div>
											<div class="recent_item_title"><a href="property.html">Duster</a></div>
											<div class="recent_item_price">Rs. 13,28,999</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div style="margin-left: 25px;"><div class="recent_icon"><img src="images/milage.png" alt=""></div><span>19.87 kmpl</span></div>
											<div><div class="recent_icon"><img src="images/engine.png" alt=""></div><span>1498 cc</span></div>
											<div><div class="recent_icon"><img src="images/power.png" alt=""></div><span>108 BHP</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="images/property_2.jpg" alt="">
											<div class="tag_offer property_tag"><a href="#">Offer</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Suzuki</div>
											<div class="recent_item_title"><a href="property.html">Dzire</a></div>
											<div class="recent_item_price">Rs. 13,28,999</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div style="margin-left: 25px;"><div class="recent_icon"><img src="images/milage.png" alt=""></div><span>19.87 kmpl</span></div>
											<div><div class="recent_icon"><img src="images/engine.png" alt=""></div><span>1498 cc</span></div>
											<div><div class="recent_icon"><img src="images/power.png" alt=""></div><span>108 BHP</span></div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<img src="images/property_3.jpg" alt="">
											<div class="tag_featured property_tag"><a href="#">Featured</a></div>
										</div>
										<div class="recent_item_body text-center">
											<div class="recent_item_location">Mercedes</div>
											<div class="recent_item_title"><a href="property.html">x500-3l</a></div>
											<div class="recent_item_price">Rs. 13,28,999</div>
										</div>
										<div class="recent_item_footer d-flex flex-row align-items-center justify-content-start">
											<div style="margin-left: 25px;"><div class="recent_icon"><img src="images/milage.png" alt=""></div><span>19.87 kmpl</span></div>
											<div><div class="recent_icon"><img src="images/engine.png" alt=""></div><span>1498 cc</span></div>
											<div><div class="recent_icon"><img src="images/power.png" alt=""></div><span>108 BHP</span></div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
							<div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div>
					</div>
					<div class="button recent_button"><a href="cars.php">see more</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cities -->

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find Cars in these companies</div>
					<div class="section_subtitle">Search your dream car</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
			<?php 
				include("db.php");
				$rs = mysqli_query($con, "select * from cars");
				while($r = mysqli_fetch_array($rs)){
					$ab = mysqli_query($con,"select MIN(expected_price), status from car_details where modelcode IN(select modelcode from car_models where carcode = '$r[1]' AND status = 1)");
					$a = mysqli_fetch_array($ab);
					?>
						<div class="city">
							<img src="admin/carco-img/<?php echo $r[2]; ?>" width =350 height = 300 alt="car">
							<div class="city_overlay">
								<a href="cars.php?carcom=<?=$r[1]?>" class="d-flex flex-column align-items-center justify-content-center">
									<div class="city_title"><?=$r[0]?></div>
									<div class="city_subtitle">Starting from Rs. <?php if($a['MIN(expected_price)']){ echo $a['MIN(expected_price)'];} else { echo "NA";} ?></div>
								</a>	
							</div>
						</div>
					<?php
				}
			 ?>
			
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">What our clients say</div>
					<div class="section_subtitle">Search your dream car</div>
				</div>
			</div>
			<div class="row testimonials_row">
				
				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Amazing home for me</div>
						<div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_1.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Diane Smith</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_2.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Michael Duncan</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

				<!-- Testimonial Item -->
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_3.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Shawn Gaines</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

			</div>
		</div>
	</div>

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="www.acmeetgroup.com" target="_blank">ACME EMBEDDED</a>
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