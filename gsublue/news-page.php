<?php
/*
Template Name: News 
*/
?>

<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>">
	<?php get_template_part( 'banner' ); ?>

		<div class="row remove-bottom">
			<div id="contentwrap-dept" class="eleven columns">
				<?php get_template_part( 'navigation' ); ?>
				<div id="contentpad-dept" class="news clearfix inset">
					<?php get_template_part( 'loop' , 'news' ); ?>
				</div>
		
			</div>
			
		<?php get_sidebar(); ?>
			
		</div>
</div> <!-- end #post-id -->	

<div class="row remove-bottom padtop_50"></div>
	
<?php get_footer(); ?>	