<?php
/*
 Single Post Template 
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
		<p> <?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
		<p><span class="prev-post"><?php previous_post_link('%link', '<span class="no-underline">Previous</span>: %title', TRUE); ?></span><span class="next-post"><?php next_post_link('%link', '<span class="no-underline">Next</span>: %title', TRUE); ?></span></p>
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
 			
