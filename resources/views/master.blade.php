<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>HartsFord - Home Buy & Sell Market Place</title>
		<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.min.css">
			<link rel="stylesheet" href="css/owl.theme.min.css">
			<link rel="stylesheet" href="css/owl.transitions.css">
			<link rel="stylesheet" href="css/carousel_advance.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/rangeslider.css">
			<!--======= Responsive Bootstrap Carousel StyleSheet =========-->
		<link href="css/testimonial_speech_bubble_border_carousel.css" rel="stylesheet" media="all">
		</head>
		<body>

			  <!-- #header Start-->
			  <header id="header">
			  	<div class="header-top bg-1">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-xs-12 hide_column">
								<div class="header-top-menu">
									<ul>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Community</a></li>
										<li><a href="sell_a_product.html">Become A Seller</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-5 col-md-12 col-xs-12">
								<div class="header-top-right text-right">
									<ul class="account">	
										<li>
											<a href="#">
												<img src="img/boogyman.png" alt="">
												BoogyMan  <span>$94.01 
												<i class="fa fa-angle-down"></i></span>
											</a>
											<ul class="profile">
												<li><a href="{{route('user-profile')}}">User Profile</a></li>
												<li><a href="upload_products.html">Upload Products</a></li>
												<li><a href="favourite_products.html">Favourite Products</a></li>
												<li><a href="{{route('change-password')}}">Change Password</a></li>
												<li><a href="{{route('manage-products')}}">Manage Products</a></li>
												<li><a href="{{route('notifications')}}">Notifications</a></li>
												<li><a href="{{route('messages')}}">Messages</a></li>
												<li><a href="{{route('shopping-cart')}}">Shopping Cart</a></li>
												<li><a href="{{route('withdraw')}}">Withdraw</a></li>
												<li><a href="#">Sign Out</a></li>
											</ul>
										</li>
									</ul>
									<ul class="notification_icons">
										<li>
											<a href="#"><i class="fa fa-bell-o"></i><span class="number">11</span></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-envelope-o"></i><span class="number">5</span></a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-basket"></i>
											</a>
										</li> 

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			    <div class="header-bottom">
			    	<div class="container">
				    	<div class="row align-items-center d-flex">
				    		<div class="col-lg-2 col-md-2">
				    			<div id="logo">
							        <a href="index.html"><img src="img/logo.png" alt="" /></a>
							    </div>
				    		</div>
					   		<div class="col-lg-10 col-md-2">				
						      <nav id="nav-menu-container">
						        <ul class="nav-menu float-right">
						          <li class="menu-has-children"><a href="{{route('hom')}}">Home</a>
						          </li>
						          <li class="menu-has-children"><a href="">Pages</a>
						            <ul>
						            	<li><a href="{{route('product-listing')}}">Product Listing</a></li>
										<li><a href="{{route('product-listing-detail')}}">Product Listing Detail</a></li>
										<li><a href="{{route('search')}}">search</a></li>
										<li><a href="{{route('upload-products')}}">Upload Products</a></li>
										<li><a href="{{route('favourite-products')}}">Favourite Products</a></li>
										<li><a href="{{route('sign-in')}}">Signin Page</a></li>
										<li><a href="{{route('sign-up')}}">Signup Page</a></li>					
										<li><a href="{{route('terms-and-conditions')}}">Terms & Conditions</a></li>
										<li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
										<li><a href="{{route('eror')}}">404 Page</a></li>
						            </ul>
						          </li>
						          <li class="menu-has-children"><a href="{{route('about-us')}}">About</a>
						          </li>  
						          <li class="menu-has-children"><a href="{{route('services')}}">Services</a>
						          </li>
						          <li class="menu-has-children"><a href="blog_home.html">Blog</a>
						          	<ul>
						            	<li><a href="{{route('blog-home')}}">Blog Page</a></li>
						            	<li><a href="{{route('blog-single')}}">Blog Detail</a></li>
						            </ul>
						          </li>
						          
						          <li class="menu-has-children"><a href="{{route('contact')}}">Contact</a></li>
						          <li class="menu-has-children"><a href="{{route('sell-product')}}" class="rounded ml-3 text-white sell-btn">Sell My Car</a>
						          </li>			        	          
						        </ul>
						      </nav><!-- #nav-menu-container -->
					      </div>	    		
				    	</div>
				    </div>
			    </div>
			  </header><!-- #header -->



			  @yield('content')

			  			<!-- start footer Area -->		
		<footer class="footer-area footer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-3 col-sm-6">
						<div class="single-footer-widget newsletter">
							<img class="w-50 img-fluid mb-3" src="img/logo.png" alt="">
							<p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
							<ul class="social-footer">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3  col-md-3 col-sm-6">
						<div class="single-footer-widget">
							<h6>Useful Links</h6>
							<ul class="footer-nav">
								<li><a href="{{route('change-password')}}">Change</a></li>
								<li><a href="">Replacement</a></li>
								<li><a href="{{route('contact')}}">Contact Us</a></li>
								<li><a href="">Pre-Purchase</a></li>
								<li><a href="{{route('services')}}">Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3  col-md-3 col-sm-6">
						<div class="single-footer-widget">
							<h6>Our Service</h6>
							<ul class="footer-nav">
								<li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
								<li><a href="{{route('about-us')}}">About Us</a></li>
								<li><a href="">Terms & Conditions</a></li>
								<li><a href="">Support</a></li>
								<li><a href="{{route('about-us')}}">About</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3  col-md-3 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Keep In Touch</h6>
							<ul class="footer-nav">
								<li>
								<strong><i class="fa fa-map-marker"></i></strong><span class="pl-2">1900 Pico Blvd, New York</span>
								</li>
								<li>
								<strong><i class="fa fa-mobile"></i></strong><span class="pl-2">+48 123 456 789</span>
								</li>
								<li>
								<strong><i class="fa fa-envelope-o"></i></strong><span class="pl-2"><a href="#">example@example.com</a></span>
								</li>
							</ul>
							<div class="section_form">
                                    <div class="col-auto">
                                      <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Your Email">
                                         <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-paper-plane"></i></div>
                                        </div>
                                      </div>
                                    </div>  
                                </div>
						</div>
					</div>						
				</div>	
			</div>
		</footer>
		<div class="copyright1">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-sm-6">
						<div class="bottom_footer_info">
							<p> &copy; Copyright 2018. All rights reserved</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="bottom_footer_logo">
							<ul class="list-inline">
				                <li class="list-inline-item">
				                	<a href="#">Privacy policy &nbsp;|</a>
				                </li>
				                <li class="list-inline-item">
				                	<a href="#">Terms And Condition &nbsp;|</a>
				                </li>
				                <li class="list-inline-item">
				                	<a href="#">Contact Us</a>
				                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End footer Area --> 	

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<!--======= Touch Swipe =========-->
		<script src="js/jquery.touchSwipe.min.js"></script>	
		<!--======= Customize =========-->
		<script src="js/responsive_bootstrap_carousel.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/rangeslider.js"></script>
		<script src="js/rangeslider.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>			
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>			
		<script src="js/parallax.min.js"></script>		
		<script src="js/mail-script.js"></script>	
		<script src="js/jquery.touchSwipe.min.js"></script>
		<script src="js/responsive_bootstrap_carousel.js"></script>
		<script src="js/paradise_slider_min.js"></script>
		<script src="js/main.js"></script>	
	</body>
</html>