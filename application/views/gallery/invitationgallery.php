<?php $this->load->view('common/header'); ?>
<style type="text/css">
	.moments-left {
	    padding-right: 10px;
	    padding-left: 0;
	    padding-bottom: 10px;
	}
	.moments-left img {
	    width: 100%;
	}
</style>
		 <div class="banner-left">
						
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
<!--light-box-files -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
	<!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.moments-bottom a').Chocolat();
	});
	</script>
	<!--moments-starts--> 
	<div class="moments">
		<div class="container">
				<h3>Invitation Cards</h3>
				<br>
				<br>
			<div class="moments-bottom">
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w2.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w2.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w1.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w1.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w3.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w3.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w4.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w4.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w3.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w3.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w1.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w1.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w2.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w2.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w4.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w4.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a href="<?php echo base_url(); ?>assets/images/b-w1.jpg">
							<img src="<?php echo base_url(); ?>assets/images/w1.jpg" alt="name" />
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
			</div>
	</div>	
	<!--moments-->
		<?php $this->load->view('common/footer'); ?>
	