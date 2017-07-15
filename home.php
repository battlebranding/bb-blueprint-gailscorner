<?php get_header(); ?>
<section class="has-no-padding">
	<?php echo do_shortcode('[pjc_slideshow slide_type="homepage-hero"]'); ?>
</section>
<section>
	<div class="container">
		<?php bp_woo_show_products( 'Summer 2017 Exclusives' ); ?>
	</div>
</section>
<section>
	<div class="container">
		<div class="columns is-fullwidth-on-mobile">
			<div class="column">
				<div id="in-person-shopping-banner" class="banner is-medium" style="background-image: url('<?php bp_image('woman-trying-on-shawl.jpg'); ?>');">
					<h3>In-Person Shopping</h3>
					<p>124 W. 69TH Street<br />Chicago, IL 60621</p>
					<a href="<?php echo home_url('plan-a-visit'); ?>" class="button is-outlined is-rounded">Plan A Visit</a>
				</div>
			</div>
			<div class="column">
				<div id="summer-collection-banner" class="banner is-medium" style="background-image: url('<?php bp_image('summer-2017-collection-banner.jpg'); ?>');">
					<div class="content is-three-fourths">
						<h3 class="is-italic">Summer 2017 Exclusives</h3>
						<a href="<?php echo home_url('/shop/category/summer-2017-exclusives/'); ?>" class="button is-purple is-rounded">View ALL 2017 Summer Exclusives</a>
					</div>
				</div>
			</div>
		</div>
		<div class="columns is-fullwidth-on-mobile">
			<div class="column">
				<div id="white-party-banner" class="banner is-medium has-text-left" style="background-image: url('<?php bp_image('white-jumper.jpg'); ?>');">
					<h3>White Party Collection</h3>
					<span class="button-wrapper">
						<a href="<?php echo home_url('/shop/category/white-party-collection/'); ?>" class="button is-outlined is-rounded">View White Party Collection</a>
					</span>
				</div>
			</div>
			<div class="column">
				<div id="coupon-banner" class="banner is-medium has-text-centered" style="background-image: url('<?php bp_image('clothes-on-rack.jpg'); ?>');">
					<div class="icon is-large">
						<i class="fa fa-tag" aria-hidden="true"></i>
					</div>
					<h3 class="is-bold">10% OFF Welcome Sale</h3>
					<span class="button-wrapper">
						<a href="<?php echo home_url('/10-off-welcome-sale/'); ?>" class="button is-outlined is-rounded">Add to cart</a>
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
