<?php
/*
Default page template. 
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="twelve columns">
		<?php get_template_part( 'pagebanner' ); ?>
		<div id="pagepad">
			<?php get_template_part( 'loop' ); ?>				
		</div>
	</article>
			
<?php get_footer(); ?>	
	