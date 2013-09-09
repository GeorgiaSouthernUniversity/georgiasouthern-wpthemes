<section id="bottom_bar" class="mobile-hide">
<?php dynamic_sidebar( 'Footer' ); ?>
</section>

	</div><!-- container -->
<!-- End Document
================================================== -->
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){

	/* prepend menu icon */
	$('#mainmenu').prepend('<div id="menu-icon">Menu</div>');
	
	/* toggle nav */
	$("#menu-icon").on("click", function(){
		$("#main-menu").slideToggle();
		$(this).toggleClass("active");
	});

});
</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-516ec4d7256e2de8"></script><!-- AddThis Share Buttons -->

<?php include('../web_templates/CORE/includes/wp/footer-college.php');?>