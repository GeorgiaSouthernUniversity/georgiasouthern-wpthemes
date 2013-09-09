<div id="pagebanner" class="mobile-hide">
		<?php dynamic_sidebar( 'Inside Page Banner' ); ?>
		<div id="sitename" class="bg_local"><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?></a></div>			
		<!-- AddThis Button BEGIN -->
			<?php if ( ! is_page_template( '404.php' ) ) {?> <!-- don't show buttons on 404 error page -->
				<div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				</div>				
			<?php }?>
		<!-- AddThis Button END -->		
	</div>