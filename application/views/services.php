<?php $this->load->view('common/header'); ?>

	
	<div class="banner-left">
		<!-- banner-text Slider starts Here -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
							// You can also use "$(window).load(function() {"

			$(function () {
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
	<!--about-->
	<div class="content">
		<div class="container">
			<div class="about">
				<h2>Services</h2>
				<div class="about-bottom">

					<!--grids --> 
					<div class="popular-w3">
						<div class="popular-grids">
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/11.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-home" aria-hidden="true"></i> -->
									<h5>Wedding Planning</h5>
									<div class="detail-bottom">
										<ul>
											<li>Matrimony Services</li>
											<li>Invitation card</li>
											<li>Cinegraphy & photography</li>
											<li>Venue booking</li>
											<li>Floral decoration</li>
											<li>Nadhaswaram & Religious Orchestra</li>
											<li>Food & beverages</li>
											<li>Beautification & costume designing</li>
											<li>Luxuary cars</li>
											<!-- <li>Grand entry</li> -->
											<!-- <li>Wedding cakes</li> -->
											<!-- <li>Bachelor parties / hen parties</li> -->
											<!-- <li>Honeymoon packages</li> -->
											<!-- <li>Light music & DJs</li> -->
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/13.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-envira" aria-hidden="true"></i> -->
									<h5>College Events</h5>
									<div class="detail-bottom">
										<ul>
											<li>Stage & art decoration</li>
											<li>Pro-show</li>
											<li>Celebrity management</li>
											<li>Photography & videography</li>
											<li>Website</li>
											<li>Teaser video & posters</li>
											<li>Sponsorships</li>
											<li>Media patners</li>
											<li>Charity fund</li>
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/15.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-building" aria-hidden="true"></i> -->
									<h5>Birthday Party</h5>
									<div class="detail-bottom">
										<ul>
											<li>Birthday cakes
											<li>Decoration</li>
											<li>Food & beverages</li>
											<li>Photography</li>
											<li>Venue booking</li>
											<li>Gift</li>
											<li>Costume designing</li>
											<br>
											<br>
											<br>
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/18.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
									<h5>Star Night</h5>
									<div class="detail-bottom">
										<ul>
											<li>Venue booking</li>
											<li>Art design</li>
											<li>Light & sounds</li>
											<!-- <li>Disco jockeys</li> -->
											<!-- <li>Food & beverages</li> -->
											<li>Event promotions</li>
											<!-- <li>Props</li> -->
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							
							<!-- <div class="clearfix"></div> -->
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/14.jpeg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
									<h5>Public Events</h5>
									<div class="detail-bottom">
										<ul>
											<li>Light & sounds</li>
											<li>Art works</li>
											<li>Celebrity Management</li>
											<li>Advertisement</li>
											<!-- <li>Guards</li> -->
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/17.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
									<h5>Product Launch</h5>
									<div class="detail-bottom">
										<ul>
											<li>Venue booking</li>
											<li>Art design</li>
											<li>Advertisement</li>
											<li>Celebrity Management</li>
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 popular-grid">
								<img src="<?php echo base_url(); ?>assets/images/services/12.jpg" class="img-responsive" alt=""/>
								<div class="popular-text">
									<!-- <i class="fa fa-cog" aria-hidden="true"></i> -->
									<h5>Exhibitions</h5>
									<div class="detail-bottom">
										<ul>
											<li>Venue booking</li>
											<li>Light & sounds</li>
											<li>Event promotions</li>
										</ul>
									</div>
									<div class="w3-button">
										<a href="single.html">Know more</a>
									</div>
								</div>
							</div>
							
							

						</div>
					</div>
					<!-- //grids --> 

				</div>

				<!---->
		<!-- <div class="bottom-grid">
			<h3>Furniture Design</h3>
			<div class="col-md-4 bottom-grids">
				<a href="single.html" ><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/vi.jpg" title="name" alt="" ></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at accumsan justo. Vivamus eget volpat lacus nec tristique leoestibulum.</p>
			</div>
			<div class="col-md-4 bottom-grids">
				<a href="single.html" ><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/vi1.jpg" title="name" alt="" ></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at accumsan justo. Vivamus eget volpat lacus nec tristique leoestibulum.</p>
			</div>
			<div class="col-md-4 possible-about">
					<h4>OUR CAPABILITIES</h4>
						<div class="tab1">
							<ul class="place">
								<li><img src="<?php echo base_url(); ?>assets/images/cir.png" alt=""></li>
								<li>Placerat ligula tincidunt</li>
							</ul>
						<p >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab2">
							<ul class="place">
								<li><img src="<?php echo base_url(); ?>assets/images/cir.png" alt=""></li>
								<li>Sed ut perspiciatis unde</li>
							</ul>
						<p >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="tab3">
							<ul class="place">
								<li><img src="<?php echo base_url(); ?>assets/images/cir.png" alt=""></li>
								<li>Eaque ipsa quae ab illo </li>
							</ul>
						<p >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						
						<div class="tab4">
							<ul class="place">
								<li><img src="<?php echo base_url(); ?>assets/images/cir.png" alt=""></li>
								<li>Eaque ipsa quae ab illo </li>
							</ul>
						<p >Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						
						
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})	
							});
						</script>
						</div>
					<div class="clearfix"> </div>
				</div> -->
			</div>
		</div>

		<!--/about-->
		
		<?php $this->load->view('common/footer'); ?>
	