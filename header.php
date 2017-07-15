<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Fresca|Philosopher" rel="stylesheet">
		<title>Title</title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(''); ?>>
		<header>
			<div class="container">
				<div class="columns">
					<div class="column is-hidden-on-mobile">
						<ul class="menu is-horizontal">
							<li><a href="https://www.facebook.com/GailsCornerBoutique/" class="icon button is-circular is-outlined is-gold"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<!-- <li><a href="#" class="icon button is-circular is-outlined is-gold"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
							<li><a href="https://www.instagram.com/gailscornerboutique/" class="icon button is-circular is-outlined is-gold"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="column is-half has-text-centered has-text-left-on-mobile">
						<a href="<?php echo home_url(); ?>"><img src="<?php bp_image('gails-corner-logo-web-white.png'); ?>" width="150" /></a>
					</div>
					<div class="column is-half-on-mobile has-text-right">
						<ul class="menu is-horizontal">
							<!-- <li><a href="<?php echo home_url('my-account'); ?>" class="button is-gold is-outlined is-rounded">Sign In</a></li> -->
							<li><a href="<?php echo home_url('cart'); ?>" class="button is-gold is-outlined is-rounded"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
								<?php if( WC()->cart->get_cart_contents_count() ): ?>
									<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
								<?php endif; ?>
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<ul class="nav is-mobile-only is-horizontal has-text-centered">
				<li><a class="action-open-mobile-nav">Menu</a></li>
			</ul>
			<div class="container is-fullscreen-on-mobile">
				<a class="button action-close-mobile-nav is-mobile-only"><i class="fa fa-times" aria-hidden="true"></i> Close</a>
				<?php wp_nav_menu( array(
					'theme_location' 	=> 'primary',
					'container'			=> null,
					'menu_id'			=> 'main-menu',
					'menu_class'		=> 'nav is-main-nav is-horizontal is-uppercased has-text-centered',
				) ); ?>
			</div>
		</nav>
