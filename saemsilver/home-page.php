<?php
/*
Template Name: Home Page 
*/
?>

<?php get_header(); ?>
	<section class="row remove-bottom">
		<article id="fp_slideshowwrap" class="two-thirds column">			
			<!--banner text overlay removed-->
			<div id="fp_slideshow">					
			<?php echo do_shortcode('[pb_slideshow group="0"]'); ?>
			</div>
		</article>
		<nav class="one-third column omega">
			<div id="fp_menu">
				<div id="fp_menuheader_saem" class="bg_local"><?php echo get_bloginfo('name')?></div>
				<!-- Hide corner shadows to allow text to wrap down to next line -->
				<div class="row top">
					<?php dynamic_sidebar( 'Home Menu One' ); ?>
					<?php dynamic_sidebar( 'Home Menu Two' ); ?>
				</div>
				<div class="row">
					<?php dynamic_sidebar( 'Home Menu Three' ); ?>
					<?php dynamic_sidebar( 'Home Menu Four' ); ?>
				</div>
				<div id="ql_callout" class="row remove-bottom">
					<div class="half column">
						<div class="fp_quicklinks bg_local">DIVISION LINKS</div>
								<ul>
									<li><a href="http://admissions.georgiasouthern.edu">Apply Now</a></li>
									<li><a href="http://em.georgiasouthern.edu/fundraising">Give Now</a></li>
									<li><a href="http://em.georgiasouthern.edu/feedback">Customer Service Feedback</a></li>
									<li><a href="http://em.georgiasouthern.edu">Student Affairs &amp; Enrollment Management</a></li>	
								</ul>
					</div>
					<div id="callout" class="half column">
						<?php dynamic_sidebar( 'Home Menu Six' ); ?>
					</div>
				</div>
			</div><!-- #fp menu -->
		</nav>	
	</section>
	<section id="fp_featurewrap" class="row remove-bottom">
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Left' ); ?>	
			</div>
		</div> <!-- /feature -->
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Middle' ); ?>
			</div>
		</div> <!-- /feature -->
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">	
			<?php dynamic_sidebar('Home Bottom Right'); ?>
			</div>	
		</div> <!-- /feature -->
	</section>	
<?php get_footer(); ?>