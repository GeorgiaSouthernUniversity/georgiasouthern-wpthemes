<nav id="sidebar" class="four columns">
		<div id="college-menu" class="bg_local">
			<h3><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?> Home</a></h3>
		</div>
		
		<div id="sb_nav">
			<?php dynamic_sidebar( 'Sidebar Navigation Menu' ); ?>				
			<div class="clear"></div>
		</div>
</nav>