<?php
/*
Template Name: Home Page 
*/
?>

<?php get_header(); ?>
	<section class="row remove-bottom">
		<article id="fp_slideshowwrap" class="two-thirds column">			
			
				<div id="fp_titleblock_college">
					<div id="row1"></div>
					<div id="row2"><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?></a></div>
					<div id="row3" class="clearfix"><?php echo get_bloginfo('description')?></div>
				</div>
			<div id="fp_slideshow">					
			<?php echo do_shortcode('[pb_slideshow group="0"]'); ?>			
			</div>
		</article>
		<nav class="one-third column omega">
			<div id="fp_menu">
				<div id="fp_menuheader" class="bg_local"><?php echo get_bloginfo('name')?></div>
				<!-- Hide corner shadows to allow text to wrap down to next line <img src="http://cms.georgiasouthern.edu/~gsu/web_templates/CORE/images/fp_menuheadershadow.png" alt="" id="fp_menuheadershadow" class="mobile-hide" />-->
				<div class="row top">
					<?php dynamic_sidebar( 'Home Menu One' ); ?>
					<?php dynamic_sidebar( 'Home Menu Two' ); ?>
				</div>
				<div class="row">
					<?php dynamic_sidebar( 'Home Menu Three' ); ?>
					<?php dynamic_sidebar( 'Home Menu Four' ); ?>
				</div>
				<div id="ql_callout" class="row remove-bottom">
					<?php dynamic_sidebar( 'Home Menu Five' ); ?>					
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
			<?php dynamic_sidebar( 'Home Bottom Right' ); ?>
			</div>	
		</div> <!-- /feature -->
	</section>	
	<?php get_footer(); ?>	