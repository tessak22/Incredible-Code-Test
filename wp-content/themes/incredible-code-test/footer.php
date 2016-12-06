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

	<footer class="site-footer" >
		<div class="contact-us col-md-7">
			<div class="contact-form col-md-5 col-md-offset-1">
				<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact Us"]' ); ?>
			</div>
		</div>
		<div class="reach-us col-md-5">
			Some Stuff
		</div>
	</footer>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
