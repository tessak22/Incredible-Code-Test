<?php
/**
 * page
 * front page
 *
 * @package incredible-code-test
 */

get_header(); ?>

	<div class="homepage-intro container-fluid">
		<div class="homepage-row row">
		    <div class="homepage-content col-md-5 col-md-offset-1" role="main">
		    	<h1><?php the_title(); ?></h1>
		        <?php
			        while (have_posts()) {
			            the_post();
			            get_template_part('content');
			        }
		        ?>
		        <a class="btn btn-default" href="<?php the_field('homepage_intro_cta_button_url'); ?>"><?php the_field('homepage_intro_cta_button'); ?></a>
		        <a href="<?php the_field('homepage_intro_button_image_url'); ?>" target="_blank"><img src="<?php the_field('homepage_intro_button_image'); ?>"></a>

		        <div class="affiliation-logos">
					<?php if( have_rows('affiliate_logos') ): ?>
						<ul>
							<?php while( have_rows('affiliate_logos') ): the_row(); 
								// vars
								$image = get_sub_field('affiliate_logo');
								$link = get_sub_field('affiliate_link')
								?>
								<li>
									<?php if( $link ): ?>
										<a href="<?php echo $link; ?>" target="_blank">
									<?php endif; ?>
										<img src="<?php echo $image; ?>" />
									<?php if( $link ): ?>
										</a>
									<?php endif; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
		        </div><!--Affiliate Logos -->
		    </div>
		    <div class="homepage-featured-image col-md-5">
		    	<?php the_post_thumbnail( 'full' ); ?>
		    </div>
		</div><!--homepage-row-->
	</div><!-- .container -->

	<div class="our-procedures">
		<h2>Our Procedures</h2>
		<div class="procedures">
			<div class="procedure body col-md-3">
				<div class="title"></div>
				<h4>Body</h4>
			</div>
			<div class="procedure face col-md-3">
				<div class="title"></div>
				<h4>Face</h4>
			</div>
			<div class="procedure breast col-md-3">
				<div class="title"></div>
				<h4>Breast</h4>
			</div>
			<div class="procedure other col-md-3">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/procedure-other.jpg">
				<div class="title"></div>
				<h4>Other</h4>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
