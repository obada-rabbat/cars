@extends('master')
@section('content')



			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								User Profile				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> User Profile</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-3 sidebar">
							<div class="single-slidebar-profile">
								<figure>
                                    <a href="#" class="employer-dashboard-thumb"><img src="img/avatar_15.jpg" alt=""></a>
                                    <figcaption>
                                        <h2>Hellen Rebecca</h2>
                                        <p>Super Samurai Hyundai Los Angeles, Usa</p>
                                         <ul class="share_link">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
                                    </figcaption>
                                </figure>
							</div>
							<div class="single-slidebar">
								
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex text_active" href="user_profile.html"><p><i class="fa fa-user-o pr-2"></i>  User Profile</p></a></li>
									<li><a class="justify-content-between d-flex" href="upload_products.html"><p><i class="fa fa-file-word-o pr-2"></i>  Upload Products</p></a></li>
									<li><a class="justify-content-between d-flex" href="manage_products.html"><p><i class="fa fa-heart-o pr-2"></i> Manage Products</p></a></li>
									<li><a class="justify-content-between d-flex" href="product_notification.html"><p><i class="fa fa-briefcase pr-2"></i>  Notifications</p></a></li>
									<li><a class="justify-content-between d-flex" href="product_message.html"><p><i class="fa fa-bell-o pr-2"></i>  Messages</p></a></li>
									<li><a class="justify-content-between d-flex" href="favourite_products.html"><p><i class="fa fa-id-card-o pr-2"></i>  Favourite Products</p></a></li>
                                    <li><a class="justify-content-between d-flex" href="withdraw.html"><p><i class="fa fa-money pr-2"></i>   Withdraws</p></a></li>
									<li><a class="justify-content-between d-flex text-active" href="change_password.html"><p><i class="fa fa-lock pr-2"></i> Change Password</p></a></li>
									<li><a class="justify-content-between d-flex" href="index.html"><p><i class="fa fa-sign-out pr-2"></i> Logout</p></a></li>
								</ul>
							</div>							

						</div>
						<div class="col-lg-9 post-list">
							<div class="profile_job_content col-lg-12">
								<div class="headline">
									<h3> Welcome User</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Account Name *</h5>
												<input class="form-control" type="text" placeholder="Account Name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Website *</h5>
												<input class="form-control" type="text" placeholder="website name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>New Password *</h5>
												<input class="form-control" type="password" placeholder="new password">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Confirm Password *</h5>
												<input class="form-control" type="password" placeholder="confirm password">
											</div>
										</div>
										<div class="col-md-12 col-sm-6">
											<div class="submit-field">
												<h5>Email *</h5>
												<input class="form-control" type="email" placeholder="example@example.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Profile Image *</h5>
												<div class="careerfy-fileUpload">
		                                            <span class="clr_b"><i class="fa fa-plus careerfy-add"></i> Upload Photo</span>
		                                            <input type="file" class="careerfy-upload">
		                                        </div>
		                                    </div>
		                                </div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Country *</h5>
												<select class="form-control">
												  <option>Select Country</option>
												  <option>China</option>
												  <option>Srilanka</option>
												  <option>Bangladesh</option>
												  <option>Pakistan</option>
												</select>
											</div>
										</div>										
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Description *</h5>
												<textarea class="form-control" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt.Donec pretium gravida erat, a faucibus velit egestas eget."></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="profile_job_content col-lg-12 mt-5">
								<div class="headline">
									<h3>Biling Information</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>First Name *</h5>
												<input class="form-control" type="text" placeholder="first name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Last Name *</h5>
												<input class="form-control" type="text" placeholder="last name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Company Name *</h5>
												<input class="form-control" type="text" placeholder=" Company name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Email Address *</h5>
												<input class="form-control" type="email" placeholder="email address">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Country *</h5>
												<select class="form-control">
												  <option>United Kingdom</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>State/City *</h5>
												<select class="form-control">
												  <option>London</option>
												  <option>Mancester</option>
												  <option>Oval</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>City / Town *</h5>
												<select class="form-control">
												  <option>London</option>
												  <option>Mancester</option>
												  <option>Oval</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Postcode *</h5>
												<input class="form-control" type="tel" placeholder="12345">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Full Address *</h5>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Additional Notes</h5>
												<textarea class="form-control" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt.Donec pretium gravida erat, a faucibus velit egestas eget."></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>	

							<div class="profile_job_content col-lg-12 mt-5">
								<div class="headline">
									<h3>Company Social</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Facebook</h5>
												<input class="form-control" type="text" placeholder="http://www.facebook.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Twitter</h5>
												<input class="form-control" type="text" placeholder="http://www.twitter.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Google Plus</h5>
												<input class="form-control" type="text" placeholder="http://www.google-plus.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Youtube</h5>
												<input class="form-control" type="text" placeholder="http://www.youtube.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Vimeo</h5>
												<input class="form-control" type="text" placeholder="http://www.vimeo.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Linkedin</h5>
												<input class="form-control" type="text" placeholder="http://www.linkedin.com">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="profile_job_content col-lg-12 mt-5">
								<div class="headline">
									<h3>Shipping Information</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>First Name *</h5>
												<input class="form-control" type="text" placeholder="first name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Last Name *</h5>
												<input class="form-control" type="text" placeholder="last name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Company Name *</h5>
												<input class="form-control" type="text" placeholder=" Company name">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Email Address *</h5>
												<input class="form-control" type="email" placeholder="email address">
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Country *</h5>
												<select class="form-control">
												  <option>United Kingdom</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>State/City *</h5>
												<select class="form-control">
												  <option>London</option>
												  <option>Mancester</option>
												  <option>Oval</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>City / Town *</h5>
												<select class="form-control">
												  <option>London</option>
												  <option>Mancester</option>
												  <option>Oval</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="submit-field">
												<h5>Postcode *</h5>
												<input class="form-control" type="tel" placeholder="12345">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Full Address *</h5>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Additional Notes</h5>
												<textarea class="form-control" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt.Donec pretium gravida erat, a faucibus velit egestas eget."></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="add_job_btn col-lg-12 mt-5">
								<div class="submit-field">
									 <button type="submit" class="job_detail_btn">Submit</button>
								</div>
							</div>															

						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->

@stop