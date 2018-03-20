<?php
include('vw_header.php');
?>
<div class="pageContent">
	    		
	    		<div class="page-title">
					<div class="container">
						<h1>Contact</h1>
					</div>
				</div>
				<div class="md-padding">
					<div class="container">
						<div class="row row-eq-height">
							<div class="col-md-6">
								<div class="heading style3">
									<h3 class="uppercase">Our<span class="main-color"> Office</span></h3>
								</div>
								<div>
									<div class="row m-b-2 over-hidden">
										<div class="col-md-6">
											<ul class="details">
												<li><i class="fa fa-map-marker main-color"></i><span>Reyank Technology Pvt. Ltd. <br> Office No 104, Tulip Building<br> Godrej Hill Road,Barave Road<br> 
Kalyan West, Maharashtra-421301</span></li>
												<li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> support@reyank.com</span></li>
											</ul>
										</div>
										<div class="col-md-6">
										</div>
									</div>
								</div>
								<!---<div class="heading style3">
									<h3 class="uppercase">Our<span class="main-color"> Partner</span></h3>
								</div>
								<div class="row m-b-2 over-hidden">
										<div class="col-md-6">
											<ul class="details">
												<li><i class="fa fa-map-marker main-color"></i><span>Fabz Info Pvt.Ltd <br> Plot No. T-10/1, Software Technology Park of India,<br>Chikalthana MIDC, Aurangabad,<br>Maharashtra. India.</span></li>
												<li><i class="fa fa-phone main-color"></i><span><strong>Phone:</strong> +91 0240 660 0986</span></li>
												<li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> fabzinfo@yahoo.com</span></li>
											</ul>
										</div>
										<div class="col-md-6">
										</div>
									</div>--->
								
							</div>
							<div class="col-md-1">
								<div class="vertical-sep"></div>
							</div>
							<div class="col-md-5">
								<div class="heading style3">
									<h3 class="uppercase"><span class="main-color">Get In </span> Touch</h3>
								</div>
								
								<form id="contact-form" class="ajax-form" name="contact" action="http://www.Reyank.com/contact_form" method="post" novalidate="novalidate">

									<div class="contact-msg">
										<div class="alert alert-success">
											<img alt="" src="Main-Web/assets/images/ajax-loader.gif" class="contact-loader" />
											<div class="success-msg">
												<i class="fa fa-thumbs-o-up ico-block"></i>
												<p>Thanks for getting in touch with us, We'll check your message and get back to you shortly!</p>
											</div>
										</div>
									</div>

									<div class="row form-group over-hidden">
										
										<div class="col-md-6">
											<label for="contact-name">Name <small>*</small></label>
											<input type="text" id="contact-name" name="contact_name" placeholder="Enter Your Name" class="form-control required">
										</div>

										<div class="col-md-6">
											<label for="contact-email">Email <small>*</small></label>
											<input type="email" id="contact-email" name="email" placeholder="Enter Your Email" class="form-control required">
										</div>


									</div>

									<div class="row form-group over-hidden">

										<div class="col-md-12">
											<label for="contact-subject">Phone <small>*</small></label>
											<input type="text" id="contact-subject" placeholder="Type Subject" name="phone" class="form-control required">
										</div>

									</div>

									<div class="form-group over-hidden">
										<label for="contact-message">Message <small>*</small></label>
										<textarea id="contact-message" placeholder="Type Your Message" name="message" rows="6" cols="30" class="form-control required"></textarea>
									</div>

									<!--div class="form-group clearfix captcha-div">
	                                    <img alt="" src="<?php echo $_SESSION['captcha']['image_src']; ?>" id='captchaimg' class="left">
	                                    <input type="hidden" id="hidCap" value="<?php echo $_SESSION['captcha']['code']; ?>" data-error="Captcha does not match!" />
	                                    <input id="captcha_input" class="form-control required" name="captcha_input" type="text" placeholder="Enter the code here">
	                                </div-->

									<div class="form-group m-t-2">
										<button class="btn main-bg btn-lg border3px" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
									</div>

								</form>	

								<div class="alert alert-warning socials-cont m-t-2">
									<div class="tbl social-list f-right">
										<a href="https://www.facebook.com/Reyank/?hc_ref=PAGES_TIMELINE&amp;fref=nf" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
										<a href="https://www.linkedin.com/company/Reyank.com" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Dribbble"><i class="fa fa-dribbble ic-dribbble"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus"></i></a>
										<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Skype"><i class="fa fa-skype ic-skype"></i></a>
									</div>
									<div class="clearfix"></div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>

		    </div>			    
	    	<!-- Content start -->

<?php
include('vw_footer.php');
?>