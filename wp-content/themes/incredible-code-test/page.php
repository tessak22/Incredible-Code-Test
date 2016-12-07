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
		    <div class="page-title col-md-12 text-center" role="main">
		    	<h2><?php the_title(); ?></h2>
		    </div>
		</div><!--.row-->
	</div><!-- .container -->


	<div class="container-fluid">
		<div class="row">
		    <div class="content col-md-10 col-md-offset-1" role="main">
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