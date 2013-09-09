<?php get_template_part( 'breadcrumbs' ); ?>
<?php get_template_part( 'social' ); ?>
<!-- begin loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
	<h1 class="title"><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<div class="clearfix"></div>		
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>	
<div class="clearfloat"></div>
<!-- end loop -->