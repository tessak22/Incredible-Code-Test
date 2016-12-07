<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package incredible-code-test
 */

get_header(); ?>

	<div class="container-fluid">
		<div class="row">
		    <div class="page-title col-md-10 col-md-offset-1 text-center" role="main">
		    	<h2><?php the_field('content_introduction_title'); ?></h2>
		    	<div class="page-intro">
		    		<?php the_field('content_introduction_text'); ?>
		    	</div>	
		    </div>
		</div><!--.row-->
	</div><!-- .container -->

	<div class="container-fluid">
		<div class="row">
		    <div class="content-featured-image col-md-5 col-md-offset-1" role="main">
		    	<?php the_post_thumbnail( 'full' ); ?>
		    </div>
		    <div class="content col-md-5" role="main">
		        <?php
		        while (have_posts()) {
		            the_post();
		            get_template_part('content');
		        }
		        ?>
		    </div>
		</div>
	</div><!-- .container -->

<?php get_footer(); ?>