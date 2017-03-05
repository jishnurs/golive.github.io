<?php $this->load->view('common/header'); ?>

			 
						<!-- banner-text Slider starts Here -->
						<script src="assets/js/responsiveslides.min.js"></script>
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
						<div class="banner"> 
							<div  id="top" class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="banner-slide">
										    <div class="overlay">
										      <div class="container">
										        <div class="row">
										          <div class="intro-text">
										            <h1>Go Live Eventers</h1>
										            <p>Wedding Planning</p>
										            <!-- <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> -->
										            </div>
										        </div>
										      </div>
										    </div>
										</div>
									</li>
									<li>
										<div class="banner1">
										<div class="overlay">
										  <div class="container">
										    <div class="row">
										      <div class="intro-text">
										        <h1>Go Live Eventers</h1>
										        <p>Birthday Parties</p>
										        <!-- <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> -->
										        </div>
										    </div>
										  </div>
										</div>
										</div>
									</li>
									<li>
										<div class="banner2">
										<div class="overlay">
										  <div class="container">
										    <div class="row">
										      <div class="intro-text">
										        <h1>Go Live Eventers</h1>
										        <p>College events</p>
										        <!-- <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> -->
										        </div>
										    </div>
										  </div>
										</div>
										</div>
									</li>
						</ul>
		</div>
		<div class="clearfix"> </div>
	</div>				 	
<!--/header-->
<!-- <div class="welcome">
	<div class="container">
		<div class="col-md-4 welcome-img">
			<img src="assets/images/weelcome.jpg" alt="" />
		</div>
		<div class="col-md-8 welcome-text">
			<h4>Welcome To Our Furnish Gallery</h4>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
				laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
				 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
				  sit aspernatur aut odit aut fugit.</p>
		</div>
	</div>
</div> -->
<div class="index-about">
	<div class="container">
			    <h3>About</h3>
				<p>For Most Of The Event Management Companies, An Event Means Linens, Chairs, Tables, Decoration, Catering etc. But We Understand That Every Event Is Special That Connects People With Each Other, A Platform To Develop New Ideas And To Build New Relations. And Of course You Deserve The Event Management Services Of A Company That Does Not Just look At Materialistic Aspects Of An Event But Understands your Needs  And  Delivers  A  Great  Event.  That’s 
GO-LIVE EVENTS!... But We Understand That Every Event Would Remain As Special That Connects People’s HEART And Everyone’s Entire life As A Well Portrayed Moments Of LOVE,HAPPINESS FOREEVER!...
</p>
			 </div>
		</div>


		<!-- team -->
			<div class="team" id="team">
				<div class="container">
					<div class="latest-designs">	
							<h3>Our Services</h3>
					</div>
					<!-- <h3>Our Services</h3> -->
					<!-- <span>Excellent Team Members</span> -->
					<div class="team-grids">
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/11.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Wedding Planning</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Wedding Planning</h4>
							<p></p>
							
						</div>
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/15.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Birthday Party</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Birthday Party</h4>
							<p></p>
							
						</div>
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/13.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">College Events</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>College Events</h4>
							<p></p>
							
						</div>
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/14.jpeg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Public Events</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Public Events</h4>
							<p></p>
							
						</div>

						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/12.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Exhibitions</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Exhibitions</h4>
							<p></p>
							
						</div>
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/17.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Product Launch</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Product Launch</h4>
							<p></p>
							
						</div>
						<div class="col-md-3 col-sm-6 team-grid">
							<div class="pic">
								<div class="stack twisted">	
									<img src="assets/images/services/18.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="pic-caption top-to-bottom">
									<h5 class="pic-title">Star Night</h5>
									<p>repreh qui in voluptate ea.</p>
								</div>
							</div>
							<h4>Star Night</h4>
							<p></p>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		<!-- //team -->

<!-- 
<div class="latest-designs">	
	<div class="container">
		<h3>Our Services</h3>
		<div class="gallery-info">
			<ul class="demo-1 effect">
				<li>
					<h2>Wedding Planning</h2>
					<p></p>
				</li>

				<li><img class="top" src="assets/images/services/11.jpg" alt=""/></li>
			</ul>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>Birthday Party</h2>
						<p></p>
					</li>

					<li><img class="top" src="assets/images/services/15.jpg" alt=""/></li>
				</ul>
			</li>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>College Events</h2>
						<p></p>
					</li>

					<li><img class="top" src="assets/images/services/13.jpg" alt=""/></li>
				</ul>
			</li>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>Public Events</h2>
						<p></p>
					</li>
					<br>
					<li><img class="top" src="assets/images/services/14.jpg" alt=""/></li>
				</ul>
			</li>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>Exhibitions</h2>
						<p></p>
					</li>

					<li><img class="top" src="assets/images/services/12.jpg" alt=""/></li>
				</ul>
			</li>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>Product Launch</h2>
						<p></p>
					</li>

					<li><img class="top" src="assets/images/services/17.jpg" alt=""/></li>
				</ul>
			</li>
			<li>
				<ul class="demo-1 effect">
					<li>
						<h2>Star Night</h2>
						<p></p>
					</li>
					
					<li><img class="top" src="assets/images/services/18.jpg" alt=""/></li>
				</ul>
			</li>

			<div class="clearfix"> </div>
		</div>
	</div>
</div> -->
		<!-- <div class="testimonials">
			<div class="testimonials-info">
					<div class="col-md-6 testimonials-text">
						<h5>The silverware needed polishing and the furniture could use a good dusting.</h5>
			</div>
        </div>
        </div> -->
        <link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"> </script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>
        
<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids">
			<div class="container">
				<div class="col-md-3 w3l-footer one">
					<h3>About Company</h3>
					<p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Latin at Hampden-Sydney College in Virginia from a Lorem Ipsum passage, undoubtable source.</p>
					<p class="adam">- Mark Thomson, CEO</p>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 w3l-footer one tweet">
					<h3>Tweets</h3>
					<ul>
						<li>
							<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
							<i>http//example.com</i></a>
							<span>About 15 minutes ago<span>
						</span></span></li>
						<li>
							<a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
							<i>http//example.com</i></a>
							<span>About a day ago<span>
						</span></span></li>
					</ul>
				</div>
				<div class="col-md-3 w3l-footer two">
					<h3>Keep Connected</h3>
					<ul>
						<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
						<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
						<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
						<!-- <li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li> -->
						<!-- <li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li> -->
					</ul>
				</div>
				<div class="col-md-3 w3l-footer three">
					<h3>Contact Information</h3>
					<ul>
						<li><i class="fa fa-map-marker"></i><p>Golive Eventers <span>Kaithamukku,</span>Trivandrum (ellow cab). </p><div class="clearfix"></div> </li>
						<li><i class="fa fa-phone"></i><p>+91 77 36 07 30 20 <span>+91 96 33 67 30 20</span></p> <div class="clearfix"></div> </li>
						<!-- <li><i class=""></i><p>+91 96 33 67 30 20</p> <div class="clearfix"></div> </li> -->
						<li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">goliveeventers@gmail.com</a> <div class="clearfix"></div></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</footer>
		
	<!-- //footer -->
		<?php $this->load->view('common/footer'); ?>