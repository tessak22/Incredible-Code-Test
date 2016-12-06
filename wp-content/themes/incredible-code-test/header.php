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
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="container-fluid">
			<div class="row">
				<div class="logo col-md-2">
					<img src="<?php the_field('logo', 'option'); ?>">
				</div>
				<div class="header-contact col-md-10 pull-right">
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
		</div>
	</header>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
				<?php /* Main Menu */
					wp_nav_menu( array(
					  'menu' => 'mainmenu',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);
				?>
				<div class="telephone col-sm-2 pull-right">
		            <p itemprop="telephone"><a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a><p>
		        </div>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>

	<div id="content" class="site-content">
