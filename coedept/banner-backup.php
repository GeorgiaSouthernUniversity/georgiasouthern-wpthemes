<div id="fp-banner-dept" class="sixteen columns">
	<h6 class="ribbon-left-home"><span><a href="<?php echo network_site_url(); ?>"><?php echo get_option('parent_college'); ?></a></span></h6>
	<div class="ribbon-left-home-corner"></div>
	<a href="<?php echo home_url()?>"><img id="deptheader" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
	<div id="fp_titleblock">
		<div id="row1"></div>
		<div id="row2"><a href="<?php echo home_url()?>"><?php echo get_theme_mod( 'custom_site_title' ); ?></a></div>
		<div id="row3" class="clearfix"><a href="<?php if(function_exists('custom_tagline_link'))echo get_theme_mod( 'custom_tagline_link' ); ?>"><?php echo get_theme_mod( 'custom_tagline' ); ?></a></div>
	</div>	
</div>