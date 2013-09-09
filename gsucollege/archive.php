<?php
/*
Archive page template.
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="twelve columns">
		<?php get_template_part( 'pagebanner' ); ?>
		<div id="pagepad" class="news">
			<?php get_template_part( 'loop', 'archive' ); ?>				
		</div>
	</article>
			
<?php get_footer(); ?>	