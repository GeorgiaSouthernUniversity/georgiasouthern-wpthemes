<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.georgiasouthern.edu">Georgia Southern University</a></p>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="/web_templates/CORE/js/ui.js"></script>
<script src="/web_templates/CORE/js/webelements.js"></script>
<?php wp_footer(); ?>




</body>
</html>