<?php
/*
404 Page Template 
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="twelve columns">
		<?php get_template_part( 'pagebanner' ); ?>
		<div id="pagepad">
			<h1 class="f24">Page Not Found</h1>
			<p>Sorry, but that page doesn't exist. Use your browser's 'back' button to return to the previous page or visit the <a href="<?php echo home_url()?>">home page</a>.</p>
								
		</div>
	</article>
			
<?php get_footer(); ?>		