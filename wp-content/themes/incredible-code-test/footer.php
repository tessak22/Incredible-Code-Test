<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incredible-code-test
 */

?>

	</div><!-- #content -->

	<footer class="site-footer container-fluid">
		<div class="row flex-lg-desktop">
			<div class="contact-us col-lg-7">
				<div class="contact-form col-lg-10 col-md-offset-1">
					<h2>Contact Us</h2>
					<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Us"]' ); ?>
				</div>
			</div>
			<div class="reach-us col-lg-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.8472094767117!2d145.03855040667895!3d-37.86386533546584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad669fb188f3ba1%3A0xec1fe6763af9a1b9!2s253+Wattletree+Rd%2C+Malvern+VIC+3144%2C+Australia!5e0!3m2!1sen!2sus!4v1481051242057" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="contact-info">
					<p><?php the_field('full_address', 'option'); ?></p>
					<p><span>P.</span> <a href="tel:<?php the_field('contact_phone', 'option'); ?>"><?php the_field('contact_phone', 'option'); ?></a></p>
					<p><span>E.</span> <a href="mailto:<?php the_field('contact_email', 'option'); ?>"><?php the_field('contact_email', 'option'); ?></a></p>
				</div>
				<ul class="social">
					<li><a href="<?php the_field('facebook_url', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('twitter_url', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('youtube_url', 'option'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('linkedin_url', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="<?php the_field('instagram_url', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
				<div class="copyright">
					<p><span>Copyright 2016© Ritz Plastic Surgery</span> Online marketing by <a href="http://www.incrediblemarketing.com/" target="_blank">SEO Firm Incredible Marketing</a></p>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	//add or remove nav-open class to body for off-canvas nav
    $('.nav-toggle').click(function() {
        $('body').toggleClass("nav-open");
    });
</script>
</body>
</html>
