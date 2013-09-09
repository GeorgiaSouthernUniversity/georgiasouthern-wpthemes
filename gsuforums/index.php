<?php
/*
Default page template. 
*/
?>

<?php get_header(); ?>
<?php include('dept_banner.php');?>

	<div class="row remove-bottom">
	<div id="contentwrap-dept" class="twelve columns">
	
		<div id="contentpad-dept" class="clearfix inset">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>				
		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>	
		</div>
	</div>				
	<div id="sidebar-dept" class="four columns omega">
		<div id="sidebarpad-dept">
			<?php dynamic_sidebar( 'Right Sidebar' ); ?>			
		</div>
	</div>
</div>
<div class="row remove-bottom padtop_50"></div>
<section id="bottom_bar" class="mobile-hide">
<?php dynamic_sidebar( 'Dept Footer' ); ?>
</section>
	</div><!-- container -->
<!-- End Document
================================================== -->
<?php wp_footer(); ?>
<?php include('../web_templates/CORE/includes/wp/footer.php');?>
 			
