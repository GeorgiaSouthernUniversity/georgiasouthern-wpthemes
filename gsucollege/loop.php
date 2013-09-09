<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<div class="breadcrumbs">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<div class="clearfix"></div>		
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>	
