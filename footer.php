			<footer>
				<div class="container">
					<div class="columns is-fullwidth-on-mobile">
						<div class="column is-one-fourth">
							<span class="image-wrapper"><img src="<?php bp_image('gails-corner-logo-web-white.png'); ?>" width="150" /></span>
							<p>&copy; 2017 Gail’s Corner Boutique<br />All rights reserved.</p>
						</div>
						<div class="column">
							<ul class="nav">
								<li><a href="<?php echo home_url(); ?>">Home</a></li>
								<li><a href="<?php echo home_url('shop'); ?>">Shop</a></li>
								<li><a href="<?php echo home_url('events'); ?>">Events</a></li>
								<li><a href="<?php echo home_url('about'); ?>">About</a></li>
								<li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
							</ul>
							<ul class="nav second">
								<li><a href="<?php echo home_url('size-charts'); ?>">Size Charts</a></li>
								<li><a href="<?php echo home_url('return-policy'); ?>">Return Policy</a></li>
								<li><a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a></li>
							</ul>
						</div>
						<div class="column">
							<h4>Follow Us</h4>
							<ul class="menu second">
								<li><a href="https://www.facebook.com/GailsCornerBoutique/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
								<!-- <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li> -->
								<li><a href="https://www.instagram.com/gailscornerboutique/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
							</ul>
						</div>
						<div class="column is-half">
							<h4>Subscribe to our news</h4>
							<p>You can’t afford to miss all of the great deals and offers that we have.</p>
						</div>
					</div>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
