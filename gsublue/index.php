<?php
/*
Default page template. 
*/
?>

<?php get_header(); ?>
<?php if (is_front_page() ) {?> <div id="home"> <?php } else {?> <div id="post-<?php the_ID(); ?>"> <?php } ?>
	<?php get_template_part( 'banner' ); ?>

		<div class="row remove-bottom">
			<div id="contentwrap-dept" class="eleven columns">
				<?php get_template_part( 'navigation' ); ?>
				<div id="contentpad-dept" class="clearfix inset">
				
				<?php get_template_part( 'loop' ); ?>
						
					
				</div>
			
			</div>
			
		<?php get_sidebar(); ?>

			
		</div>
</div> <!-- end #post-id -->	

<div class="row remove-bottom padtop_50"></div>
	
<?php get_footer(); ?>
 			
