<div class="copy-right-grids">
	<div class="container">
		<div class="copy-left">
				<p class="footer-gd">© 2017 Goliveeventers. All Rights Reserved | Design by <a href="https://goliveeventers.com/" target="_blank">Go Live</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
 <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
 <script src="<?php echo base_url();?>assets/js/nivo-lightbox.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/jquery.swipebox.min.js"></script>

 <script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
 <script type="text/javascript">
 	jQuery(document).ready(function($) {
 		$(".scroll").click(function(event){		
 			event.preventDefault();
 			$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
 		});
 	});
 </script>
 <script type="text/javascript">
 	$(document).ready(function() {
 		$().UItoTop({ easingType: 'easeOutQuart' });
 	});
 </script>
 <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
