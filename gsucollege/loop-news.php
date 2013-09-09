<div class="breadcrumbs">
	<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
</div>
<h1 id="news">News</h1>
	<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); 
		// set $more to 0 to show the excerpt if more tag used
		global $more;
		$more = 0;
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-meta"><?php the_time(get_option('date_format')); ?></p>
		<?php the_content('Read more...'); ?>
			<div class="clearfloat"></div>
			<hr class="spacer">
		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>	
<div class="prevnextpage"><p><?php posts_nav_link(' ', '<span class="next-post">Newer posts --></span>', '<span class="prev-post"><-- Older posts</span>'); ?></p></div>
<?php wp_reset_query(); ?>