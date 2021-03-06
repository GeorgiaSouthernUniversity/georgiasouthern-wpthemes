<?php get_template_part( 'breadcrumbs' ); ?>
<?php get_template_part( 'social' ); ?>
<!-- begin loop -->
	<h1 class="title"><?php the_title(); ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<p class="post-meta"><?php the_date(); ?></p>
	<?php the_content(); ?>
	<div class="clearfix"></div>
	<p> <?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
	<p><span class="prev-post"><?php previous_post_link('%link', 'Previous', TRUE); ?></span><span class="next-post"><?php next_post_link('%link', 'Next', TRUE); ?></span></p>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<!-- end loop -->	
