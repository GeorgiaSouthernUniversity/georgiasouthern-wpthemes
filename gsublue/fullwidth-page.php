<?php
/*
Template Name: Full-width Page (No Sidebar)
*/
?>

<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>">
	<?php get_template_part( 'banner' ); ?>

		<div class="row remove-bottom">
			<div id="contentwrap-dept" class="sixteen columns">
					<?php get_template_part( 'navigation' ); ?>
				<div id="contentpad-dept" class="clearfix inset">				
					<?php get_template_part( 'loop' ); ?>					
					
				</div>
			
			</div>		
		
		</div>
</div> <!-- end #post-id -->	

<div class="row remove-bottom padtop_50"></div>
	
<?php get_footer(); ?>			