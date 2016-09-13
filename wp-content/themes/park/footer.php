			<!-- footer -->
			

			<footer class="row" id="footer" role="contentinfo">
       		
       		<div class="col-md-4 col-md-4" id="footer_nav">
       		 
				<div id="newsletter">
					<p>
					<h2>Newsletter</h2>
						Subscribe to our newsletter to receive news, updates, Discount Coupon releases by email. We don't do spam..
					</p>
					<?php 
					$widgetNL = new WYSIJA_NL_Widget(true);
					echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));


					?>
				</div>
       		</div>

       		<div class="col-md-4 col-sm-4">
       			<h2>Contact us</h2>
       			<?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>
       		</div>

				<div class="col-md-4 col-sm-4" id="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12091.217497771653!2d-73.9831139!3d40.7443299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2787a468ad4bc479!2sPark+Ave+Art+gallery+%2Cinc!5e0!3m2!1sen!2sus!4v1473394885813" width="360" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			

			</footer>
			<!-- /footer -->
        <div class="row">
        	<div class="col-md-12 text-center" id="copyright">
        			<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. 
					
				</p>
				<!-- /copyright -->
        	</div>	
        </div>


		</div>
		<!-- /wrapper -->
			<script type="text/javascript" >
				(function(){
					$('.wysija-submit').addClass('btn btn-success');
					$('.wpcf7-submit').addClass('btn btn-success');
				})()
			</script>
		<?php wp_footer(); ?>




		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>









	</body>
</html>
