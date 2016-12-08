<?php
/**
 * page
 * front page
 *
 * @package incredible-code-test
 */

get_header(); ?>

	<div class="homepage-intro container-fluid">
		<div class="row">
		    <div class="homepage-content col-md-10 col-md-offset-1" role="main">
		    	<h1><?php the_title(); ?></h1>
		        <?php
			        while (have_posts()) {
			            the_post();
			            get_template_part('content');
			        }
		        ?>
		        <?php the_post_thumbnail( 'full' ); ?>
		        <div class="homepage-content-buttons">
		        	<a class="btn btn-default" href="<?php the_field('homepage_intro_cta_button_url'); ?>"><?php the_field('homepage_intro_cta_button'); ?></a>
		        	<a class="real-life" href="<?php the_field('homepage_intro_button_image_url'); ?>" target="_blank"><img src="<?php the_field('homepage_intro_button_image'); ?>"></a>
		        </div>
		    </div>
		</div>
		<div class="row">
	    	<div class="affiliation-logos col-lg-6 col-md-8 col-sm-10 col-md-offset-1">
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
		</div><!--row-->
	</div><!-- .container -->

	<div class="our-procedures container-fluid">
		<h2>Our Procedures</h2>
		<div class="row flex-desktop">
			<div class="procedure body">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/procedure-body.jpg">
				<div class="title"></div>
				<h4>Body</h4>
			</div>
			<div class="procedure face">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/procedure-face.jpg">
				<div class="title"></div>
				<h4>Face</h4>
			</div>
			<div class="procedure breast">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/procedure-breast.jpg">
				<div class="title"></div>
				<h4>Breast</h4>
			</div>
			<div class="procedure other">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/procedure-other.jpg">
				<div class="title"></div>
				<h4>Other</h4>
			</div>
		</div>
	</div>

	<div class="homepage-gallery container-fluid">
		<div class="row">
			<div class="gallery-preview col-sm-7 col-lg-6 col-lg-offset-1">
				<ul>
					<li>
						<h5>Before</h5>
						<img src="<?php bloginfo( 'template_url' ); ?>/images/before-example.jpg">
					</li>
					<li>
						<h5>After</h5>
						<img src="<?php bloginfo( 'template_url' ); ?>/images/after-example.jpg">
					</li>
				</ul>
			</div>
			<div class="gallery-content col-sm-5 col-lg-4">
				<h2>Before and After Gallery</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<h6>VIEW OUR FULL BEFORE AND AFTER GALLERY</h6>
				<a class="btn btn-default" href="#">See More</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
