<?php
/*
 404 Page Not Found Template 
*/
?>

<?php get_header(); ?>





<div id="fp-banner-dept" class="admissions sixteen columns">
	<a href="<?php echo home_url()?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
	<div id="fp_titleblock">
		<div id="row1"><?php echo get_bloginfo('description')?></div>
		<div id="row2"><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?></a></div>
		<div id="row3" class="clearfix">
			
		</div>
	</div>		
</div>
	
	<div class="row remove-bottom">
	<div id="contentwrap-dept" class="eleven columns">
	<div id="mainmenu" class="row">
 <ul class="menu">
	<?php wp_nav_menu(array('menu' => 'Departmental Navigation')); ?>

  </ul>
</div>
		<div id="contentpad-dept" class="clearfix inset">
		
			
		<h1>Page Not Found</h1>
		<p>Sorry, but that page doesn't exist. Hit the 'back' button in your browser to return to the previous page or visit the <a href="<?php echo home_url()?>">home page</a>.</p>
		
						
			
		</div>
	
	</div>				


	<div id="sidebar-dept" class="five columns omega">
		<div id="sidebarpad-dept">
			<?php dynamic_sidebar( 'Right Sidebar' ); ?>			
		</div>
	</div>
</div>
	

<div class="row remove-bottom padtop_50"></div>
	
<section id="bottom_bar" class="mobile-hide">
<strong><?php echo $dept_name;?></strong> <span class="bulletspace">&bull;</span>
<span class="bb_pobox"><?php echo $dept_address;?> <?php echo $dept_zipcode;?></span> 
<span class="bulletspace">&bull;</span>
<span><?php echo $dept_phone;?></span>
</section>

	</div><!-- container -->
<!-- End Document
================================================== -->
<?php wp_footer(); ?>
<?php include('../web_templates/CORE/includes/wp/footer.php');?>
 			
