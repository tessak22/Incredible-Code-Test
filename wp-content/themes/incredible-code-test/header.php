<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incredible-code-test
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Custom Theme CSS -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">
<!-- Font Awesome -->
<script src="https://use.fontawesome.com/53a0e731d4.js"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="relative container-fluid">
			<div class="row">
				<div class="logo col-sm-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('logo', 'option'); ?>"></a>
				</div>
				<div class="header-contact col-sm-9 pull-right">
					<ul class="social">
						<li><a href="<?php the_field('facebook_url', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('twitter_url', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('youtube_url', 'option'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('linkedin_url', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="<?php the_field('instagram_url', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<p><a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a> <span>|</span> <a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a></p>
				</div>
			</div>
			<?php if(is_front_page() == true ): ?>
			<div class="row">
				<div class="homepage-hero pull-right">
					<h2>Melbourne's</h2>
					<h1>Body Contouring</h1>
					<h3>Specialist</h3>
					<?php if(get_field('call_to_action_button')): ?>
						<a class="btn btn-primary" href="<?php the_field('call_to_action_button_url'); ?>"><?php the_field('call_to_action_button'); ?></a>
					<?php endif; ?>
					<?php if(get_field('secondary_call_to_action_button')): ?>
						<a class="btn btn-default" href="<?php the_field('secondary_call_to_action_button_url'); ?>"><?php the_field('secondary_call_to_action_button'); ?></a>
					<?php endif; ?>
					<div class="continue">
						<a href="#content"><img src="<?php bloginfo( 'template_url' ); ?>/images/chevron.png"></a>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if(is_front_page() == false ): ?>
			<div class="container-fluid">
				<div class="row">
					<div class="content-header col-md-12 text-center">
						<h1><?php the_title(); ?></h1>
						<?php if(get_field('page_call_to_action_button_primary')): ?>
		    				<a class="btn btn-primary" href="<?php the_field('page_call_to_action_button_primary_url'); ?>"><?php the_field('page_call_to_action_button_primary'); ?></a>
		    			<?php endif; ?>
		    			<?php if(get_field('page_call_to_action_button_secondary')): ?>
		    				<a class="btn btn-default" href="<?php the_field('page_call_to_action_button_secondary_url'); ?>"><?php the_field('page_call_to_action_button_secondary'); ?></a>
		    			<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</header>

	<nav>
		<div class="container-fluid">
			<div class="row">
				<div class="mainmenu col-md-9 col-lg-offset-1">
					<?php /* Main Menu */
						wp_nav_menu( array(
						  'menu' => 'mainmenu',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav nav-pills',
						  //Process nav menu using our custom nav walker
						  'walker' => new wp_bootstrap_navwalker())
						);
					?>
				</div>
				<div class="nav-toggle">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div class="telephone col-md-2 pull-right">
		            <a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a>
		        </div>
	        </div>
		</div><!--/.container-fluid -->
	</nav>

	<div id="content">
