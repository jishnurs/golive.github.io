<?php $this->load->view('common/header'); ?>

		 <div class="banner-left">
						<!-- banner-text Slider starts Here -->
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
									}
								});	
							});
						</script>
						<!--//End-slider-script -->
						<div class="banner-title"> 
							<div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="banner-slide banner5">
										</div>
									</li>
								</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>	
<!--/header-->
<!--contact-->
<div class="contact">
 <div class="container">
 <div class="main-head-section">
		 		<h3>Contact</h3>
			<!-- 	<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1431587453420" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
		</div> -->
		 </div>
		<div class="contact_top">
			 		
			 			<div class="col-md-8 contact_left">
			 				<h4>Below Type Here</h4>
			 				<p>For more details please fill the form.</p>
							  <form>
								 <div class="form_details">
					                 <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
									 <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
									 <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
									 <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
									 <div class="clearfix"> </div>
									 <div class="sub-button">
									 	<input type="submit" value="Send message">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-4 company-right">
					        	<div class="company_ad">
							     		<h3>Address</h3>
							     		<span>Golive Eventers<!-- , Kaithamukku, Trivandrum --></span>
			      						<address>
											 <p>email : <a href="mailto:goliveeventers@gmail.com">goliveeventers@gmail.com</a></p>
											 <p>phone : +91 77 36 07 30 20</p>
									   		<p>Kaithamukku</p>
									   		<p>Trivandrum</p>
									 	 	
							   			</address>
							   		</div>
							</div>	
							<div class="clearfix"> </div>
					</div>
	</div>
</div>
<!--/contact-->
		<?php $this->load->view('common/footer'); ?>
		