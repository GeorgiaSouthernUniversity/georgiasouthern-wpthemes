<div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
</div>
		<h1><?php single_cat_title(); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<h6><?php the_title(); ?></h6>		
		<?php the_content(); ?>
		<div style="clear:both;"></div>
		<p> <?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
		<div style="clear:both;"></div>
			<hr class="spacer">
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
<div class="prevnextpage"><p><?php posts_nav_link(' ', '<span class="next-post">Newer posts --></span>', '<span class="prev-post"><-- Older posts</span>'); ?></p></div>
<!-- end loop -->	